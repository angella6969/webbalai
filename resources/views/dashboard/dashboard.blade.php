@extends('layout.dashboard.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Wellcame Back,{{ auth()->user()->role->name }} : {{ auth()->user()->name }} </h1>
    </div>

    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">
@endsection
