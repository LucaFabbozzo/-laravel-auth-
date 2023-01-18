@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto text-center pt-5 text">
        <div class="card m-auto p-2 mb-5" style="width: 50%;">
         <img style="width: 40%" src="{{$project->cover_image}}" class="card-img-top m-auto p-2 bg-dark" alt="{{$project->name}}">
            <div class="card-body">
                <h4 class="card-title fs-2">{{$project->name}}</h4>
                <p class="card-title fs-4">{{$project->client_name}}</p>
                <p class="card-text fs-6">{{$project->summary}}</p>
                {{-- <a class="btn btn-outline-success" href="{{route('', $comic)}}"><i class="fa-regular fa-pen-to-square"></i> Modify</a> --}}
            </div>
        </div>
    </div>
@endsection

@section('title')
   | Admin
@endsection
