<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('product.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('product.edit',$record->id)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Pname</th>
			<td>{{$record->pname}}</td>
		</tr>
		<tr>
			<th>Qoh</th>
			<td>{{$record->qoh}}</td>
		</tr>
		<tr>
			<th>Qoh Threshold</th>
			<td>{{$record->qoh_threshold}}</td>
		</tr>
		<tr>
			<th>Original Price</th>
			<td>{{$record->original_price}}</td>
		</tr>
		<tr>
			<th>Discnt Rate</th>
			<td>{{$record->discnt_rate}}</td>
		</tr>
		<tr>
			<th>Sid</th>
			<td>{{$record->sid}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
