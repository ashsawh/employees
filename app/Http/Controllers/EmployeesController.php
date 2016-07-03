<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;

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

        return view('profile', compact('employee', 'titles', 'department', 'salaries', 'method'));
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
        $method = 'view';

        return view('profile', compact('employee', 'titles', 'department', 'salaries', 'method'));
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
