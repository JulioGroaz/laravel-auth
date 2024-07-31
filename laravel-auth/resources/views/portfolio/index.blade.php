@extends('layouts.app')

@section('page-title', 'Project Index')
@section('main-content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center p-5">
            <h1>Projects</h1>
            <a href="{{route('portfolio.create')}}" class="btn btn-primary">Add New Project</a>
        </div>
    </div>
    <div class="row">
        @foreach ($projects as $project)
            <div class="card" style="width: 18rem; margin: 1rem;">
                <img class="card-img-top" src="{{ $project->image }}" alt="Project image">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                    <a href="{{route('portfolio.show', $project)}}" class="btn btn-primary">Project Details</a>
                    <a href="{{route('portfolio.edit', $project)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('portfolio.destroy', $project)}}" method="POST" class="d-inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('custom-scripts')
    @vite('resources/js/delete-confirm.js')
@endsection
