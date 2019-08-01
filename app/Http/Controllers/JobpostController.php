<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobpost;

class jobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobposts = Jobpost::all();
        return view('all-jobpost')->with('jobpost' , $jobposts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobpost-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'salary' => 'required|string',
            'experience' => 'required|string',
            'contact' => 'required|string',
        ]);
        if (!$validator->fails())
        {
            $jobpost = new Jobpost;
            $jobpost->title = $request->input('title');
            $jobpost->company_id = session()->get('company_id');
            $jobpost->description = $request->input('description');
            $jobpost->salary = $request->input('salary');
            $jobpost->experience = $request->input('experience');
            $jobpost->contact = $request->input('contact');
            $jobpost->save();
            return redirect()->intended(route('jobpost.index'));
        }
        return redirect()->intended(route('jobpost.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobpost = Jobpost::find($id);
        return view('jobpost-show')->with('jobpost' , $jobpost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobpost = Jobpost::find($id);
        return view('jobpost-edit')->with('jobpost' , $jobpost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'salary' => 'required|string',
            'experience' => 'required|string',
            'contact' => 'required|string',
        ]);
        if (!$validator->fails())
        {
            $jobpost = Jobpost::find($id);
            $jobpost->title = $request->input('title');
            $jobpost->company_id = session()->get('company_id');
            $jobpost->description = $request->input('description');
            $jobpost->salary = $request->input('salary');
            $jobpost->experience = $request->input('experience');
            $jobpost->contact = $request->input('contact');
            $jobpost->save();
            return redirect()->intended(route('jobpost.index'));
        }
        return redirect()->intended(route('jobpost.edit' , $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobpost = Jobpost::find($id);
        $jobpost->delete();
        return redirect()->intended(route('jobpost.index'));
    }
}
