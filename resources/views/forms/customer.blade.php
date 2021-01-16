<form action="{{isset($route)?$route:route('customers.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="cname">Cname</label>
        <input type="text" class="form-control {{ $errors->has('cname') ? ' is-invalid' : '' }}" name="cname" id="cname" value="{{old('cname',$model->cname)}}" placeholder="" maxlength="15" >
          @if($errors->has('cname'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('cname') }}</strong>
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
        <label for="visits_made">Visits Made</label>
        <input type="number" class="form-control {{ $errors->has('visits_made') ? ' is-invalid' : '' }}" name="visits_made" id="visits_made" value="{{old('visits_made',$model->visits_made)}}" placeholder="" >
          @if($errors->has('visits_made'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('visits_made') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="last_visit_time">Last Visit Time</label>
    <div class="input-group">
        <input type="datetime" class="form-control {{ $errors->has('last_visit_time') ? ' is-invalid' : '' }}" name="last_visit_time" id="last_visit_time"
               value="{{old('last_visit_time',$model->last_visit_time)}}"
               placeholder="" >
        <div class="input-group-addon">
            <label for="last_visit_time" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('last_visit_time'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('last_visit_time') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>