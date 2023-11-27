@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            
            <a class="btn btn-outline-light btn-lg mb-3">Add</a>
            
            @if (count($users))
            @foreach($users as $user)
                <div class="row d-flex align-items-center bg-grey round mb-3 p-3">
                    <div class="col-3">
                        <h2 class="m-0">{{ $user->firstName }} {{ $user->lastName }}</h2>
                    </div>
                    <div class="col-3">
                        <span>{{ $user->email }}</span>
                    </div>
                    <div class="col-3">
                        <span>{{ $user->role }}</span>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <a class="btn btn-outline-light">Edit</a>
                        <a class="btn btn-danger ms-3 {{ ($user->id == $connectedUserId) ? 'disabled' : '' }}">Delete</a>
                    </div>
                </div>
            @endforeach
            @endif

        </div>
    </div>
</div>

@endsection