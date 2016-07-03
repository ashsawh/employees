                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>{{ $department->dept_name or 'None' }}</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>{{ $employee->hire_date->format('Y-m-d') }}</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>{{ $employee->birth_date->format('Y-m-d') }}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>{{ $employee->gender }}</td>
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
