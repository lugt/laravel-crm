<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('customers.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('customers.edit',$record->id)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Cname</th>
			<td>{{$record->cname}}</td>
		</tr>
		<tr>
			<th>City</th>
			<td>{{$record->city}}</td>
		</tr>
		<tr>
			<th>Visits Made</th>
			<td>{{$record->visits_made}}</td>
		</tr>
		<tr>
			<th>Last Visit Time</th>
			<td>{{$record->last_visit_time}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
