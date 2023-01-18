@extends('layouts.app')

@section('content')
    <div class="container w-50 m-auto text-center pt-5 text-uppercase">
        <div class="box p-5 bg-light text-dark">
            <p>{{ Auth::user()->name }}</p>
            <p>{{ Auth::user()->email }}</p>
        </div>
    </div>
@endsection

@section('title')
   | Admin
@endsection
