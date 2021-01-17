<form action="{{isset($route)?$route:route('suppliers.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="sname">Sname</label>
        <input type="text" class="form-control {{ $errors->has('sname') ? ' is-invalid' : '' }}" name="sname" id="sname" value="{{old('sname',$model->sname)}}" placeholder="" maxlength="15" required="required" >
          @if($errors->has('sname'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('sname') }}</strong>
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

    <div class="form-group">
        <label for="telephone_no">Telephone No</label>
        <input type="text" class="form-control {{ $errors->has('telephone_no') ? ' is-invalid' : '' }}" name="telephone_no" id="telephone_no" value="{{old('telephone_no',$model->telephone_no)}}" placeholder="" >
          @if($errors->has('telephone_no'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('telephone_no') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>