<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
Use App\Jobpost;

class ShowJobsController extends Controller
{
    public function index()
    {
        $jobpost = DB::table('jobposts')->join('companies' , 'jobposts.company_id' ,'=' , 'companies.id')
        ->select('jobposts.id' ,'jobposts.title' , 'jobposts.description', 'jobposts.salary', 'jobposts.experience', 'jobposts.contact' , 'jobposts.created_at' ,'companies.companyname' , 'companies.logo') 
        ->get();
        return view('all-jobpost-user')->with('jobposts' , $jobpost);
    }

    public function show($id)
    {
        $jobpost = Jobpost::find($id); 
        return view('show-jobpost-user')->with('jobpost' , $jobpost);
    }

}
