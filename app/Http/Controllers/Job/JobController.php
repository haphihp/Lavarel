<?php

namespace App\Http\Controllers\Job;

use DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation;
use Phi\Http\Requests;
use Phi\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index()
    {
        $jobList = \Phi\Job::all();
        return view('job\index', ['jobList' => $jobList]);
    }
    
    public function view($id)
    {
        $job = \Phi\Job::findOrFail($id);
        return  view('job\view', ['entity' => $job]);
    }
    
    public function create()
    {
        return view('job\create');
    }
    
    public function edit($id)
    { 
        $job = \Phi\Job::findOrFail($id);
        return view('job\edit', ['entity' => $job]);
    }
}
