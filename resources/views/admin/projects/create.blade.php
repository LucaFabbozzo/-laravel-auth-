@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-4">
         <a href="{{route('admin.projects.index')}}" class="btn btn-outline-secondary text-uppercase mb-3">Back to the List</a>
        <h1 class="text-uppercase fs-5 fw-bold pb-2">Insert new project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="project name">
            </div>
             <div class="mb-3">
                <label for="client_name" class="form-label">Client Name</label>
                <input type="text" class="form-control" name="client_name" id="client_name" placeholder="client name">
            </div>
             <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <input type="text" class="form-control" name="summary" id="summary" placeholder="summary">
            </div>
             <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" class="form-control" name="cover_image" id="cover_image" placeholder="cover image">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

@section('title')
   | Admin
@endsection
