@extends('layouts.app')

@section('content')
<form action="{{ route('projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Immagine (URL)</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">URL del Progetto</label>
        <input type="text" class="form-control" id="url" name="url">
    </div>

    <div class="mb-3">
        <label for="github" class="form-label">URL GitHub</label>
        <input type="text" class="form-control" id="github" name="github">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select name="type_id" class="form-control" id="type">
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salva Progetto</button>
</form>

@endsection
