@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto text-center pt-5 text-uppercase">
        <h1 class="fs-4 pb-4">My Projects List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Summary</th>
                    <th scope="col">Cover</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</th>
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->summary }}</td>
                    <td><img style="width: 60px" src="{{ $project->cover_image }}" alt="{{ $project->name }}"></td>
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
