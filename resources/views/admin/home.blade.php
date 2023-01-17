@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Questa è la dashboard di {{ Auth::user()->name }} e {{ Auth::user()->email }}</p>
    </div>
@endsection
