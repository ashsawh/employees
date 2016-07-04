{{ Form::model($employee, ['method' => 'PATCH', 'action' => ['EmployeesController@update', $employee->emp_no]]) }}
<table class="table table-user-information">
    <tbody>
    <tr>
        <td>Department:</td>
        <td>{{ $department->dept_name or 'None' }}</td>
    </tr>
    <tr>
        <td>Hire date:</td>
        <td>
                <div id="datetimepicker4" class="input-append">
                    {{ Form::text('hire_date', $employee->hire_date->format('d/m/Y'), [ 'id' => 'hire_date', 'data-format'=> 'dd/MM/yyyy']) }}
                    <span class="add-on">
                      <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="glyphicon glyphicon-check"></i>
                    </span>
                </div>
        </td>
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td>
            <div id="datetimepicker5" class="input-append">
                {{ Form::text('birth_date', $employee->birth_date->format('d/m/Y'), [ 'id' => 'birth_date', 'data-format'=> 'dd/MM/yyyy']) }}
                <span class="add-on">
                      <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="glyphicon glyphicon-check"></i>
                    </span>
            </div>
        </td>
    </tr>

    <tr>
    <tr>
        <td>Gender</td>
        <td>
            {{
                Form::select(
                    'gender',
                    [ 'M' => 'Male', 'F' => 'Female' ],
                    $employee->gender,
                    $attributes = [ 'class' => 'selectpicker show-menu-arrow', 'data-style' => 'btn-primary' ]
                )
            }}
        </td>
    </tr>
    <tr>
        <td>Age</td>
        <td>{{ $employee->age }}</td>
    </tr>

    @if($titles->count() > 0)
        <tr>
            <td>Title</td>
            <td>{{ $titles->first()->title }}</td>
        </tr>
    @endif

    @if($salaries->count() > 0)
        <tr>
            <td>Salary</td>
            <td>${{ money_format("%.2n", $salaries->first()->salary) }}</td>
        </tr>
        @endif

        </tr>

    </tbody>
</table>
