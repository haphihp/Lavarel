@extends('layout')
@section('title', 'Laravel Jobeet')
@section('stylesheet')
    @parent
    <link rel='stylesheet' href='{{ URL::asset('css/jobs.css') }}' type="text/css" media="all"/>
    <link rel='stylesheet' href='{{ URL::asset('css/job.css') }}' type="text/css" media="all"/>
@stop
@section('content')
<h1>Job creation</h1>
<form action="#" method="post">
    <table id="job_form">
        <tfoot>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Preview your job" />
                </td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <th>Category</th>
                <td>
                    {{ form_errors(form.category) }}
                    {{ form_widget(form.category) }}
                </td>
            </tr>
            <tr>
                <th>Type</th>
                <td>
                    {{ form_errors(form.type) }}
                    {{ form_widget(form.type) }}
                </td>
            </tr>
            <tr>
                <th>Company}</th>
                <td>
                    {{ form_errors(form.company) }}
                    {{ form_widget(form.company) }}
                </td>
            </tr>
            <tr>
                <th>Position</th>
                <td>
                    {{ form_errors(form.url) }}
                    {{ form_widget(form.url) }}
                </td>
            </tr>
            <tr>
                <th>Location</th>
                <td>
                    {{ form_errors(form.position) }}
                    {{ form_widget(form.position) }}
                </td>
            </tr>
            <tr>
                <th>Description</th>
                <td>
                    {{ form_errors(form.location) }}
                    {{ form_widget(form.location) }}
                </td>
            </tr>
            <tr>
                <th>How to apply?</th>
                <td>
                    {{ form_errors(form.description) }}
                    {{ form_widget(form.description) }}
                </td>
            </tr>
            <tr>
                <th>Public?</th>
                <td>
                    {{ form_errors(form.how_to_apply) }}
                    {{ form_widget(form.how_to_apply) }}
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    {{ form_errors(form.email) }}
                    {{ form_widget(form.email) }}
                </td>
            </tr>
        </tbody>
    </table>
</form>
@stop