<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Apply;

class ApplyController extends Controller
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

    public function apply(Request $request)
    {
        $apply = new Apply;
        $apply->jobpost_id = $request->input('post_id');
        $apply->user_id = Auth::user()->id;
        $apply->save();
        return redirect()->intended(route('apply' , $request->input('post_id')));
    }


}
