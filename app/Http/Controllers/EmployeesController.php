<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeesController extends Controller
{
    // Resource employees
    public function index()
    {
        $employees = Employee::where('last_name', 'Smeets')
            ->orderBy('last_name', 'desc')
            ->take(10)
            ->get();


        $columnData = $this->getColumnsForTable();
        $siteName = 'Employees';
        $columnProperNames = array_values($columnData);
        $columnNames = array_keys($columnData);
        $primary = 'emp_no';
        return view('page', compact('columnProperNames', 'columnNames', 'siteName', 'employees', 'primary'));
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        $titles = $employee->titles();
        $department = $employee->division->department;
        $employee->load(['salaries' => function($query) {
            $query->orderBy('to_date', 'DESC');
        }]);
        $salaries = $employee->salaries;
        $method = 'view';

        return view('view_profile', compact('employee', 'titles', 'department', 'salaries', 'method'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $titles = $employee->titles();
        $department = $employee->division->department;
        $employee->load(['salaries' => function($query) {
            $query->orderBy('to_date', 'DESC');
        }]);
        $salaries = $employee->salaries;
        $method = 'edit';

        return view('edit_profile', compact('employee', 'titles', 'department', 'salaries', 'method'));
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        return 'Delete inacted';
    }

    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $name = $employee->first_name . " " . $employee->last_name;
        $employee->save($request->all());
        return redirect("employees/{$employee->emp_no}")->with(
            [
                'flash_message'   => "{$name} profile has been updated."
            ]
        );
    }

    private function getColumnsForTable()
    {
        return [
            'name'          => 'Name',
            'gender'        => 'Gender',
            'age'           => 'Age'
        ];
    }
}
