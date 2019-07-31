<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('company');
    }

    public function profile($id)
    {
        $company = Company::find($id);
        return view('company-profile')->with('company' , $company);
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('company-profile-edit')->with('company' , $company);
    }

    public function store(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'companyname' => 'required|string',
            'companytype' => 'required|string',
            'phone' => 'required|regex:/(01)[0-9]{9}+/',
            'website' => 'required|string',
            'email' => 'required|string|email',
            'aboutme' => 'required|string',
            'address' => 'required|string',
            'linkedin' => 'required|string',
            'logo' => 'image|nullable|max:1999',
        ]);
        
        $company = Company::find($id);
       
        if (!$validator->fails()){
           
            $company->companyname = $request->input('companyname');
            $company->companytype = $request->input('companytype');
            $company->phone = $request->input('phone');
            $company->email = $request->input('email');
            $company->aboutme = $request->input('aboutme');
            $company->address = $request->input('address');
            $company->linkedin = $request->input('linkedin');
            $company->website = $request->input('website');
            if($request->hasFile('logo'))
            {
                $name = $request->input('email').'_'.time().'.'.$request->file('logo')->getClientOriginalExtension();
                $company->logo = $name;
                $path = $request->file('logo')->storeAs('public/cover_images', $name);
            }
            $company->save();
            return redirect()->intended(route('company'));
        }       
        return view('company-profile-edit')->with('company' , $company);
    }
}
