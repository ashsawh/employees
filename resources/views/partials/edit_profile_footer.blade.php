                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            {!! Form::hidden('first_name', $employee->first_name ) !!}
                            {!! Form::hidden('last_name', $employee->last_name ) !!}
                            {!!
                                Form::submit('Save',
                                    $attributes = [ 'data-original-title' => 'Save record', 'data-toggle' => 'tooltip', 'class' => 'btn btn-sm btn-success' ]
                                )
                            !!}


                        </span>
                    </div>
                    {!! Form::close() !!}