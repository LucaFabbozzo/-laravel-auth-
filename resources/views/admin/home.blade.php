@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto text-center pt-5 text-uppercase">
        <p>Questa è la dashboard di {{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->email }}</p>
    </div>
@endsection
