@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('movies.store') }}">
            @csrf
                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_name" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="input_name" name="{{ old('input_name') }}">
                </div>
                <div class="col-6">
                    <label for="input_cover" class="form-label">Director</label>
                    <input type="text" class="form-control" id="input_director" name="{{ old('input_director') }}">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_name" class="form-label">Producer</label>
                    <input type="text" class="form-control" id="input_producer" name="{{ old('input_producer') }}">
                </div>
                <div class="col-6">
                    <label for="input_cover" class="form-label">Cover</label>
                    <input type="text" class="form-control" id="input_cover" name="{{ old('input_cover') }}">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_duration" class="form-label">Duration (minutes)</label>
                    <input type="number" class="form-control" id="input_duration" name="{{ old('input_duration') }}">
                </div>
                <div class="col-6">
                    <label for="input_annee" class="form-label">Année</label>
                    <input type="number" class="form-control" id="input_annee" name="{{ old('input_annee') }}">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="input_rating" name="{{ old('input_rating') }}">
                </div>
                <div class="col-6">
                    <label for="input_lien_video" class="form-label">Lien vidéo</label>
                    <input type="text" class="form-control" id="input_lien_video" name="{{ old('input_lien_video') }}">
                </div>
                </div>                
                <div class="mb-3">
                    <label for="input_summary" class="form-label">Summary</label>
                    <textarea class="form-control" id="input_summary" name="{{ old('input_summary') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
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
