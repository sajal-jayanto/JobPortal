<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
use App\User;
use Response;


class ShowApplicantContorller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
    {
    	$this->middleware('auth:company');
    }

    public function showapplicant($id)
    {
        $temp = Apply::where('jobpost_id' ,$id)->get(); 
        $applicant = array();
        foreach($temp as $person){
            $applicant[] = User::find($person->user_id);
        }
        return view('show-applicant')->with('applicants' , $applicant);
    }

    public function downlode($id)
    {
        $file = public_path('storage/cover_images/'.$id); 
        return Response::download($file);
    }   
}
