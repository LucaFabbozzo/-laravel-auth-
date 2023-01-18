@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-5">
            <h1 class="fs-4 pb-4 d-inline">My Projects List</h1>
            <a class="btn btn-outline-secondary fs-6 fw-light mx-3 text-uppercase create" href="{{route('admin.projects.create')}}">Add new project</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cover</th>
                    <th scope="col">Name</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Summary</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td><img style="width: 60px" src="{{ $project->cover_image }}" alt="{{ $project->name }}"></td>
                    <td>{{ $project->name }}</th>
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->summary }}</td>
                    <td><a class="btn btn-outline-primary" href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a class="btn btn-outline-success" href="{{route('admin.projects.edit', $project)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                     <td>
                        @include('admin.partials.form-delete', ['title'=>$project->name, 'id'=>$project->id])
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>

     {{$projects->links()}}
@endsection

@section('title')
   | Admin
@endsection
