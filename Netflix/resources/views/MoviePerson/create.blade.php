@extends('layouts.app_bootstrap')

@section('title', 'Create Movie-Person')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('movie-person.store') }}">
            @csrf
                <div class="mb-3">
                    <label for="movie_id" class="form-label">Movie</label>
                    <select class="form-select" name="movie_id">
                        <option value="-1" {{ (old('movie_id') == -1 || old('movie_id') == null) ? 'selected' : null }}>Select a movie</option>
                        @foreach($movies as $movie)
                            <option 
                                value="{{ $movie->id }}" 
                                {{ old('movie_id') == $movie->id ? 'selected' : null }}
                                >{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="person_id" class="form-label">Person</label>
                    <select class="form-select" name="person_id">
                        <option value="-1" {{ (old('person_id') == -1 || old('person_id') == null) ? 'selected' : null }}>Select a person</option>
                        @foreach($persons as $person)
                            <option
                                value="{{ $person->id }}" 
                                {{ old('person_id') == $person->id ? 'selected' : null }}
                                >{{ $person->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row mb-3">
                    <a href="{{ route('persons.index') }}" class="col-6 d-grid gap-2">
                        <button type="button" class="btn btn-outline-light btn-lg">Cancel</button>
                    </a>
                    <div class="col-6 d-grid gap-2">
                        <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                    </div>
                </div>
            </form>
            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

@endsection