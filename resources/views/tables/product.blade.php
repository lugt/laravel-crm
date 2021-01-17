<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Pname </th>
		<th>Qoh </th>
		<th>Qoh Threshold </th>
		<th>Original Price </th>
		<th>Discnt Rate </th>
		<th>Sid </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->pname }} </td>
	 	<td> {{$record->qoh }} </td>
	 	<td> {{$record->qoh_threshold }} </td>
	 	<td> {{$record->original_price }} </td>
	 	<td> {{$record->discnt_rate }} </td>
	 	<td> {{$record->sid }} </td>
	<td><a class="btn btn-secondary" href="{{route('product.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('product.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('product.destroy',$record->id)}}"
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