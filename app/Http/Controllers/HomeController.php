<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('home-profile')->with('user' , $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('home-profile-edit')->with('user' , $user);
    }

    public function store(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'phone' => 'required|regex:/(01)[0-9]{9}+/',
            'birthday' => 'required',
            'gender' => 'required|string',
            'email' => 'required|string|email',
            'aboutme' => 'required|string',
            'address' => 'required|string',
            'portfolio' => 'required|string',
            'github' => 'required|string',
            'linkedin' => 'required|string',
            'image' => 'image|nullable|max:1999',
            'resume' => 'required|mimes:pdf|max:10000|nullable',
        ]);
        
        $user = User::find($id);
        if (!$validator->fails()){
           
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->phone = $request->input('phone');
            $user->birthday = $request->input('birthday');
            $user->email = $request->input('email');
            $user->aboutme = $request->input('aboutme');
            $user->address = $request->input('address');
            $user->gender = $request->input('gender');
            $user->portfolio = $request->input('portfolio');
            $user->github = $request->input('github');
            $user->linkedin = $request->input('linkedin');

            if($request->hasFile('image'))
            {
                $name = $request->input('email').'_'.time().'.'.$request->file('image')->getClientOriginalExtension();
                $user->image = $name;
                $path = $request->file('image')->storeAs('public/cover_images', $name);
            }
            if($request->hasFile('resume'))
            {
                $name = $request->input('email').'resume_'.time().'.'.$request->file('resume')->getClientOriginalExtension();
                $user->resume = $name;
                $path = $request->file('resume')->storeAs('public/cover_images', $name);
            }
            $user->save();
            return redirect()->intended(route('home'));
        }       
        return view('home-profile-edit')->with('user' , $user);
    }


}
