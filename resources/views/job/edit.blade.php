@extends('layout')
@section('title', 'Laravel Jobeet')
@session('stylesheet')
    @parent
    <link rel='stylesheet' href='{{ URL::asset('css/jobs.css') }}' type="text/css" media="all"/>
    <link rel='stylesheet' href='{{ URL::asset('css/job.css') }}' type="text/css" media="all"/>
@stop