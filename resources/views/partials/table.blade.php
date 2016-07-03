<table class="table table-bordered">
  <thead>
    <tr>
      @foreach($columnProperNames as $columnProperName)
        <th>{{  $columnProperName }}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
    <tr>
        @for($i = 0; $i < count($employees); $i++)
            <tr>
                @foreach($columnNames as $columnName)
                    @if ($columnName === 'name')
                        <td><a href="employees/{{ $employees[$i]->emp_no }}">{{ $employees[$i]->$columnName }}</a></td>
                    @else
                        <td>{{ $employees[$i]->$columnName }}</td>
                    @endif
                @endforeach
            </tr>
        @endfor
  </tbody>
</table>
