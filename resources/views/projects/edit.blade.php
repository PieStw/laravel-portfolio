@extends('layouts.app')

@section('content')
<form action="{{ route('projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" required value="{{ $project->title }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Immagine (URL)</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $project->image }}">
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">URL del Progetto</label>
        <input type="text" class="form-control" id="url" name="url" value="{{ $project->url }}">
    </div>

    <div class="mb-3">
        <label for="github" class="form-label">URL GitHub</label>
        <input type="text" class="form-control" id="github" name="github" value="{{ $project->github }}">
    </div>

    <button type="submit" class="btn btn-primary">Salva Progetto</button>
</form>
@endsection
