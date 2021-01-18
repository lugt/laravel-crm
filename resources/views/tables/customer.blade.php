<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Cname </th>
		<th>City </th>
		<th>Visits Made </th>
		<th>Last Visit Time </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->cname }} </td>
	 	<td> {{$record->city }} </td>
	 	<td> {{$record->visits_made }} </td>
	 	<td> {{$record->last_visit_time }} </td>
	<td><a class="btn btn-secondary" href="{{route('customers.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('customers.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('customers.destroy',$record->id)}}"
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