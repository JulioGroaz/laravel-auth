@extends('layouts.app')

@section('main-content')
    <div class="row" style="justify-content-center">
        <h1 class="mb-3 fw-bolder text-center p-3">
            Insert new Project
        </h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{route('projects.store')}}" method="POST">
                @csrf

                <label for="title">Title</label>
                <input class="form-control form-control-sm" type="text" placeholder="Project title" aria-label="Project title" id="title" name="title">

                <label for="description">Description</label>
                <textarea class="form-control form-control-sm" placeholder="Project description" aria-label="Project description" id="description" name="description"></textarea>

                <label for="url">URL</label>
                <input class="form-control form-control-sm" type="text" placeholder="Project URL" aria-label="Project URL" id="url" name="url">

                <label for="image">Image URL</label>
                <input class="form-control form-control-sm" type="text" placeholder="Image URL" aria-label="Image URL" id="image" name="image">

                <label for="technologies">Technologies</label>
                <input class="form-control form-control-sm" type="text" placeholder="Technologies used" aria-label="Technologies used" id="technologies" name="technologies">

                <input type="submit" value='Insert new project' class="btn btn-primary" style="margin-top:2rem;">
            </form>
            <a href="{{route('projects.index')}}" class="btn btn-primary col-8" style="margin-top: 2rem">Back to home</a>
        </div>
    </div>
@endsection
