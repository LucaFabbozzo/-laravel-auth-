@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
            <h1 class="fs-5 text-uppercase">My Projects List</h1>
        <table class="table table-striped mb-4">
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
                        @include('admin.partials.form-delete')
                    </td>
                </tr>
                @empty
                <h2>No result</h2>
                @endforelse
            </tbody>
        </table>
         <div class="pag-box">
            {{$projects->links()}}
        </div>
    </div>
@endsection

@section('title')
   | Admin
@endsection
