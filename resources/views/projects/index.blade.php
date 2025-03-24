@extends('layouts.master')

@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}" class="text-decoration-none mr-2 text-secondary">
                    {{ $project->title }}
                </a>
               
                <a href="/projects/{{ $project->id }}/edit" class="text-decoration-none mr-2 text-secondary">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>

                <form action="/projects/{{ $project->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </li>
        @endforeach
    </ul>

    <a href="/projects/create" class="text-decoration-none text-secondary">
        <button type="button" class="btn btn-primary">Create New Project</button>
    </a>


@endsection
