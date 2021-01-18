<form action="{{isset($route)?$route:route('purchases.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="cid">Cid</label>
        <input type="text" class="form-control {{ $errors->has('cid') ? ' is-invalid' : '' }}" name="cid" id="cid" value="{{old('cid',$model->cid)}}" placeholder="" maxlength="4" required="required" >
          @if($errors->has('cid'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('cid') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="eid">Eid</label>
        <input type="text" class="form-control {{ $errors->has('eid') ? ' is-invalid' : '' }}" name="eid" id="eid" value="{{old('eid',$model->eid)}}" placeholder="" maxlength="3" required="required" >
          @if($errors->has('eid'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('eid') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="pid">Pid</label>
        <input type="text" class="form-control {{ $errors->has('pid') ? ' is-invalid' : '' }}" name="pid" id="pid" value="{{old('pid',$model->pid)}}" placeholder="" maxlength="4" required="required" >
          @if($errors->has('pid'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('pid') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="qty">Qty</label>
        <input type="number" class="form-control {{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" id="qty" value="{{old('qty',$model->qty)}}" placeholder="" >
          @if($errors->has('qty'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('qty') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="ptime">Ptime</label>
    <div class="input-group">
        <input type="datetime" class="form-control {{ $errors->has('ptime') ? ' is-invalid' : '' }}" name="ptime" id="ptime"
               value="{{old('ptime',$model->ptime)}}"
               placeholder="" >
        <div class="input-group-addon">
            <label for="ptime" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('ptime'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('ptime') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="total_price">Total Price</label>
        <input type="text" class="form-control {{ $errors->has('total_price') ? ' is-invalid' : '' }}" name="total_price" id="total_price" value="{{old('total_price',$model->total_price)}}" placeholder="" >
          @if($errors->has('total_price'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('total_price') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>