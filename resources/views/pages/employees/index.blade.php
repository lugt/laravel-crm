@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    employees
</li>
@endsection
@section('header')
<h3><i class="fa fa-list"></i> employees </h3>
@endsection
@section('tools')
<a class="btn btn-secondary" href="{{route('employees.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    @foreach($records as $record)
    <div class="col-sm-6">
        @include('cards.employee')
    </div>
    @endforeach
</div>
{!! $records->render() !!}
@endSection