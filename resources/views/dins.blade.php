@if (count($dins) > 0)
  <div class="panel panel-default">
    <div class="panel-heading">
    DINs
    </div>

    <div class="panel-body">
      <table class="table table-striped task-table">

        <!-- Table Headings -->
        <thead>
          <th>DIN</th>
          <th>Flag</th>
          <th>PCode</th>
          <th>IU</th>
        </thead>

        <!-- Table Body -->
        <tbody>
          @foreach ($dins as $din)
            <tr>
            <td class="table-text">
              <div><a href="/vdins/{{$din->din}}">{{ $din->din }}</a></div>
            </td>
            <td class="table-text">
              <div><a href="/vdins/{{$din->din}}/{{ $din->dinflag }}">{{ $din->dinflag }}</a></div>
            </td>
            <td class="table-text">
              <div>{{ $din->pcode }}</div>
            </td>
            <td class="table-text">
              <div>{{ $din->intended_use }}</div>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endif
