@extends('layouts.app')

@section('content')
    <div class="container w-50 m-auto text-center pt-5 text-uppercase">
        <h1>List</h1>
        @dump($projects)
    </div>
@endsection

@section('title')
   | Admin
@endsection
