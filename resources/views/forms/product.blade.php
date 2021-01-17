<form action="{{isset($route)?$route:route('product.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="pname">Pname</label>
        <input type="text" class="form-control {{ $errors->has('pname') ? ' is-invalid' : '' }}" name="pname" id="pname" value="{{old('pname',$model->pname)}}" placeholder="" maxlength="15" required="required" >
          @if($errors->has('pname'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('pname') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="qoh">Qoh</label>
        <input type="number" class="form-control {{ $errors->has('qoh') ? ' is-invalid' : '' }}" name="qoh" id="qoh" value="{{old('qoh',$model->qoh)}}" placeholder="" required="required" >
          @if($errors->has('qoh'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('qoh') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="qoh_threshold">Qoh Threshold</label>
        <input type="number" class="form-control {{ $errors->has('qoh_threshold') ? ' is-invalid' : '' }}" name="qoh_threshold" id="qoh_threshold" value="{{old('qoh_threshold',$model->qoh_threshold)}}" placeholder="" >
          @if($errors->has('qoh_threshold'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('qoh_threshold') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="original_price">Original Price</label>
        <input type="text" class="form-control {{ $errors->has('original_price') ? ' is-invalid' : '' }}" name="original_price" id="original_price" value="{{old('original_price',$model->original_price)}}" placeholder="" >
          @if($errors->has('original_price'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('original_price') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="discnt_rate">Discnt Rate</label>
        <input type="text" class="form-control {{ $errors->has('discnt_rate') ? ' is-invalid' : '' }}" name="discnt_rate" id="discnt_rate" value="{{old('discnt_rate',$model->discnt_rate)}}" placeholder="" >
          @if($errors->has('discnt_rate'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('discnt_rate') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="sid">Sid</label>
    <select class="form-control {{ $errors->has('sid') ? ' is-invalid' : '' }}" name="sid" id="sid">
        @if(isset($suppliers))
@foreach ($suppliers as $data)
<option value="{{$data->id}}" {{$data->id==$model->sid?'selected':''}}>{{$data->id}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('sid'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('sid') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>