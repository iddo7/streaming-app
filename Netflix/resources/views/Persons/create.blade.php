@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('persons.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option {{ (old('gender') == '-1' || old('gender') == null) ? 'selected' : null }} value="-1">Select a gender</option>
                            <option {{ old('gender') == 'male' ? 'selected' : null }} value="male">male</option>
                            <option {{ old('gender') == 'female' ? 'selected' : null }} value="female">female</option>
                            <option {{ old('gender') == 'hog rider hog rider' ? 'selected' : null }} value="hog rider hog rider">hog rider hog rider</option>
                            <option {{ old('gender') == 'buggy' ? 'selected' : null }} value="buggy">buggy</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="placeOfBirth" class="form-label">Place of birth</label>
                        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" value="{{ old('placeOfBirth') }}">
                    </div>
                    <div class="col-6">
                        <label for="mainRole" class="form-label">Main Role</label>
                        <select class="form-select" name="mainRole">
                            <option {{ (old('mainRole') == 'actor' || old('mainRole') == null) ? 'selected' : null }} value="actor">actor</option>
                            <option {{ old('mainRole') == 'director' ? 'selected' : null }} value="director">director</option>
                            <option {{ old('mainRole') == 'producer' ? 'selected' : null }} value="producer">producer</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pictureUrl" class="form-label">Profile Picture Url</label>
                    <input type="file" class="form-control" id="pictureUrl" name="pictureUrl" value="{{ old('pictureUrl') }}">
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