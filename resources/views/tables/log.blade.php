<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Who </th>
		<th>Time </th>
		<th>Table Name </th>
		<th>Operation </th>
		<th>Key Value </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->who }} </td>
	 	<td> {{$record->time }} </td>
	 	<td> {{$record->table_name }} </td>
	 	<td> {{$record->operation }} </td>
	 	<td> {{$record->key_value }} </td>
	<td><a class="btn btn-secondary" href="{{route('logs.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('logs.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('logs.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>