@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('persons.store') }}">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option selected>Select a gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="hog rider hog rider">hog rider hog rider</option>
                            <option value="buggy">buggy</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="placeOfBirth" class="form-label">Place of birth</label>
                        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth">
                    </div>
                    <div class="col-6">
                        <label for="mainRole" class="form-label">Main Role</label>
                        <select class="form-select" name="mainRole">
                            <option selected value="actor">actor</option>
                            <option value="director">director</option>
                            <option value="producer">producer</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection