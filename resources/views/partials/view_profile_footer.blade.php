                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            {!! Form::model($employee, ['method' => 'DELETE', 'action' => ['EmployeesController@destroy', $employee->emp_no], 'id' => 'FormDeleteEmployee']) !!}
                            <a href="{{ $employee->emp_no }}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

                            {!! Form::button('<i class="glyphicon glyphicon-remove"></i>',
                                    [
                                        'id'                    => 'deleteEmployee',
                                        'type'                  => 'submit',
                                        'class'                 => 'btn btn-sm btn-danger',
                                        'data-original-title'   => 'Remove this employee',
                                        'data-toggle'           => 'tooltip'
                                    ]
                                )
                            !!}

                            {!! Form::close() !!}
                        </span>
                    </div>
