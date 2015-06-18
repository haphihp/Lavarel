<?php

namespace App\Http\Controllers\Home;

use DB;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function actionView()
    {
       $jobList = DB::table('job')->get();
       return view('home\index', ['jobList' => $jobList]);
    }
}
