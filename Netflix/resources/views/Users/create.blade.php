@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName') }}">
                    </div>
                    <div class="col-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName') }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" name="role">
                        <option {{ (old('role') == 'admin' || old('role') == null) ? 'selected' : null }} value="admin">admin</option>
                        <option {{ old('role') == 'normal' ? 'selected' : null }} value="normal">normal</option>
                        <option {{ old('role') == 'kid' ? 'selected' : null }} value="kid">kid</option>
                    </select>
                </div>

                <div class="row mb-3">
                    <a href="{{ route('users.index') }}" class="col-6 d-grid gap-2">
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