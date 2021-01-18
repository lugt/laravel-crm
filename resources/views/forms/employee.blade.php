<form action="{{isset($route)?$route:route('employees.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="ename">Ename</label>
        <input type="text" class="form-control {{ $errors->has('ename') ? ' is-invalid' : '' }}" name="ename" id="ename" value="{{old('ename',$model->ename)}}" placeholder="" maxlength="15" >
          @if($errors->has('ename'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('ename') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="city" value="{{old('city',$model->city)}}" placeholder="" maxlength="15" >
          @if($errors->has('city'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('city') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>