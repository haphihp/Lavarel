@extends('layout')
@section('title', 'Laravel Jobeet')
@session('stylesheet')
    @parent
    <link rel='stylesheet' href='{{ URL::asset('css/jobs.css') }}' type="text/css" media="all"/>
    <link rel='stylesheet' href='{{ URL::asset('css/job.css') }}' type="text/css" media="all"/>
@stop
@section('content')
    <div id="job">
        <h1>{{ $entity->company }}</h1>
        <h2>{{ $entity->location }}</h2>
        <h3>
            {{ $entity->position }}
            <small> - {{ $entity->type }}</small>
        </h3>
 
        <div class="description">
            {{ $entity->description }}
        </div>
 
        <h4>How to apply?</h4>
 
        <p class="how_to_apply">{{ $entity->how_to_apply }}</p>
 
        <div class="meta">
            <small>posted on {{ $entity->created_at }}</small>
        </div>
 
        <div style="padding: 20px 0">
            <a href="{{ URL::action('Job\JobController@edit', $entity->id) }}">
                Edit
            </a>
        </div>
    </div>
@stop