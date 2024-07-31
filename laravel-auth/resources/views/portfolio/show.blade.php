@extends('layouts.app')

@section('page-title', 'Project Details')
@section('main-content')
<div class="container" style="display:flex; justify-content:center; align-items:center; flex-direction:column">
    <div class="row">
        <div class="col-12 p-5">
            <h1>{{ $project->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $project->image }}" alt="Project image">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <ul class="col-12">
                    <li class="card-text"><strong>Description: </strong>{{ $project->description }}</li>
                    <li class="card-text"><strong>URL: </strong><a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a></li>
                    <li class="card-text"><strong>Technologies: </strong>{{ $project->technologies }}</li>
                </ul>
            </div>
        </div>

        <a href="{{route('projects.index')}}" class="btn btn-primary col-8" style="margin-top: 2rem">Back to home</a>
    </div>
</div>
@endsection
