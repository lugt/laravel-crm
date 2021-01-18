<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('logs.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('logs.edit',$record->id)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Who</th>
			<td>{{$record->who}}</td>
		</tr>
		<tr>
			<th>Time</th>
			<td>{{$record->time}}</td>
		</tr>
		<tr>
			<th>Table Name</th>
			<td>{{$record->table_name}}</td>
		</tr>
		<tr>
			<th>Operation</th>
			<td>{{$record->operation}}</td>
		</tr>
		<tr>
			<th>Key Value</th>
			<td>{{$record->key_value}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
