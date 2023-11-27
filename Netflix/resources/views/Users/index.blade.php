@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            
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
                        <button class="btn btn-outline-light">Edit</button>
                        <button class="btn btn-danger ms-3">Delete</button>
                    </div>
                </div>
            @endforeach
            @endif

        </div>
    </div>
</div>

@endsection