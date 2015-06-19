@extends('layout')
@section('title', 'Laravel Jobeet')
@session('stylesheet')
    <link rel='stylesheet' href='{{ URL::asset('css/job.css') }}' type="text/css" media="all"/>
    @parent
@stop
@section('content')
<div id="jobs">
<table class="jobs">
    @foreach ($jobList as $job)
    <tr class="odd">
      <td class="location">{{ $job->location }}</td>
      <td class="position">
        <a href="view/{{ $job->id }}">
          {{ $job->position }}
        </a>
      </td>
      <td class="company">{{ $job->company }}</td>
    </tr>
    @endforeach
</table>
</div>
<table class="records_list">
</table>

<ul>
    <li>
    </li>
</ul>
@stop