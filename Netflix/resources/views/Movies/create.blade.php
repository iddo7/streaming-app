@extends('layouts.app_bootstrap')




@section('title', 'Movies page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('movies.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="row mb-3">
                <div class="col-6">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="col-6">
                    <label for="cover" class="form-label">Director</label>
                    <select class="form-select" name="director_id">
                        <option value="-1" selected>Select a person</option>
                        @foreach($persons as $person)
                            <option value="{{ $person->id }}" {{ $person->id == old('director_id') ? 'selected' : '' }}>
                                {{ $person->name }}
                            </option>
                        @endforeach
                    </select>               
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="producer_id" class="form-label">Producer</label>
                    <select class="form-select" name="producer_id">
                        <option value="-1" selected>Select a person</option>
                        @foreach($persons as $person)
                            <option value="{{ $person->id }}" {{ $person->id == old('producer_id') ? 'selected' : '' }}>
                                {{ $person->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="file" class="form-control-file" id="cover" name="cover" value="{{ old('cover') }}">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="duration_minutes" class="form-label">Duration (minutes)</label>
                    <input type="number" class="form-control" id="duration_minutes" value="{{ old('duration_minutes') }}" name="duration_minutes">
                </div>
                <div class="col-6">
                    <label for="annee" class="form-label">Année</label>
                    <input type="number" class="form-control" id="annee" value="{{ old('annee') }}" name="annee">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="rating" value="{{ old('rating') }}" name="rating">
                </div>
                <div class="col-6">
                    <label for="lien_video" class="form-label">Lien vidéo</label>
                    <input type="text" class="form-control" id="lien_video" value="{{ old('lien_video') }}" name="lien_video">
                </div>
                </div>                
                <div class="mb-3">
                    <label for="summary" class="form-label">Summary</label>
                    <input class="form-control" id="summary" value="{{ old('summary') }}" name="summary"></input>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
