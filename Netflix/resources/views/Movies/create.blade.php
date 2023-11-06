@extends('layouts.app_bootstrap')

@section('title', 'Persons page')
@section('content')

<div class="container mt-6">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form>

                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_name" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="input_name" name="input_name">
                </div>
                <div class="col-6">
                    <label for="input_cover" class="form-label">Cover</label>
                    <input type="text" class="form-control" id="input_cover" name="input_cover">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="input_gender" class="form-label">Gender</label>
                        <select class="form-select" name="input_gender">
                            <option selected>Select a gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="hog rider hog rider">hog rider hog rider</option>
                            <option value="buggy">buggy</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="input_name" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="input_birthday" name="input_birthday">
                    </div>
                </div>
                
                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_duration" class="form-label">Duration (minutes)</label>
                    <input type="number" class="form-control" id="input_duration" name="input_duration">
                </div>
                <div class="col-6">
                    <label for="input_annee" class="form-label">Année</label>
                    <input type="number" class="form-control" id="input_annee" name="input_annee">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="input_rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="input_rating" name="input_rating">
                </div>
                <div class="col-6">
                    <label for="input_lien_video" class="form-label">Lien vidéo</label>
                    <input type="text" class="form-control" id="input_lien_video" name="input_lien_video">
                </div>
                </div>                
                <div class="mb-3">
                    <label for="input_summary" class="form-label">Summary</label>
                    <textarea class="form-control" id="input_summary" name="input_summary"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
