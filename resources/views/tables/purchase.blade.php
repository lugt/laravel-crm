<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Cid </th>
		<th>Eid </th>
		<th>Pid </th>
		<th>Qty </th>
		<th>Ptime </th>
		<th>Total Price </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->cid }} </td>
	 	<td> {{$record->eid }} </td>
	 	<td> {{$record->pid }} </td>
	 	<td> {{$record->qty }} </td>
	 	<td> {{$record->ptime }} </td>
	 	<td> {{$record->total_price }} </td>
	<td><a class="btn btn-secondary" href="{{route('purchases.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('purchases.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('purchases.destroy',$record->id)}}"
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