@extends('layouts.app')

@section('breadcrumb')
<li class="breadcrumb-item">
    customers
</li>
@endsection

@section('tools')
<a class="btn btn-secondary" href="{{route('customers.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')

<div class="row">
    @foreach($records as $record)
    <div class="col-sm-6">
        @include('cards.customer')
    </div>
    @endforeach
</div>

<div class='row'>
    <div class="col-sm-12">
        {{{$records->render()}}}
    </div>
</div>
@endSection