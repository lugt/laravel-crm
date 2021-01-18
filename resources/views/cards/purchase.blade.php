<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('purchases.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('purchases.edit',$record->id)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Cid</th>
			<td>{{$record->cid}}</td>
		</tr>
		<tr>
			<th>Eid</th>
			<td>{{$record->eid}}</td>
		</tr>
		<tr>
			<th>Pid</th>
			<td>{{$record->pid}}</td>
		</tr>
		<tr>
			<th>Qty</th>
			<td>{{$record->qty}}</td>
		</tr>
		<tr>
			<th>Ptime</th>
			<td>{{$record->ptime}}</td>
		</tr>
		<tr>
			<th>Total Price</th>
			<td>{{$record->total_price}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
