<form action="{{isset($route)?$route:route('logs.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="who">Who</label>
        <input type="text" class="form-control {{ $errors->has('who') ? ' is-invalid' : '' }}" name="who" id="who" value="{{old('who',$model->who)}}" placeholder="" maxlength="10" required="required" >
          @if($errors->has('who'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('who') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="time">Time</label>
    <div class="input-group">
        <input type="datetime" class="form-control {{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" id="time"
               value="{{old('time',$model->time)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="time" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('time'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('time') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="table_name">Table Name</label>
        <input type="text" class="form-control {{ $errors->has('table_name') ? ' is-invalid' : '' }}" name="table_name" id="table_name" value="{{old('table_name',$model->table_name)}}" placeholder="" maxlength="20" required="required" >
          @if($errors->has('table_name'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('table_name') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="operation">Operation</label>
        <input type="text" class="form-control {{ $errors->has('operation') ? ' is-invalid' : '' }}" name="operation" id="operation" value="{{old('operation',$model->operation)}}" placeholder="" maxlength="6" required="required" >
          @if($errors->has('operation'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('operation') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="key_value">Key Value</label>
        <input type="text" class="form-control {{ $errors->has('key_value') ? ' is-invalid' : '' }}" name="key_value" id="key_value" value="{{old('key_value',$model->key_value)}}" placeholder="" maxlength="4" >
          @if($errors->has('key_value'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('key_value') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>