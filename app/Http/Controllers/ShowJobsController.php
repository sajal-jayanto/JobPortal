<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobpost;

class ShowJobsController extends Controller
{
    public function index()
    {
        $jobpost = Jobpost::all(); 
        return view('all-jobpost-user')->with('jobposts' , $jobpost);
    }

    public function show($id)
    {
        $jobpost = Jobpost::find($id); 
        return view('show-jobpost-user')->with('jobpost' , $jobpost);
    }

}
