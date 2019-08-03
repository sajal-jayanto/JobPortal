
@extends('layouts.app')

@section('content')
<div class="container">

    @if($company->aboutme == "" || $company->linkedin == "" || $company->logo == "")
        <div class="alert alert-danger" role="alert">
            Please Complete Your Profile !  <a href="{{ route('company.profile.edit' , $company->id) }}"> Edit Your Profile </a>
        </div>
    @endif

    <div class="card">
        <div class="card-header text-center">
                <h5> Company Profile </h5>  
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <div class="text-center">
                    <div class="container pt-2"> 
                        <img src="/storage/cover_images/{{$company->logo}}" width="250px" height="150px" alt=""/>
                    </div>
                    <div class="col-10 offset-1 pt-3">
                        <h6> About Me </h6> 
                        <p >{{$company->aboutme}}</p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-8">
                <h3 class="pb-2"> {{$company->companyname}} </h3>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label>Company Name</label>
                    </div>
                    <div class="col-6">
                        <label >{{$company->companyname}}</label>
                    </div>
                    <div class="col-6">
                        <label>Type </label>
                    </div>
                    <div class="col-6">
                        <label  >{{$company->companytype}}</label>
                    </div>

                    <div class="col-6">
                        <label>Email</label>
                    </div>
                    <div class="col-6">
                        <label >{{$company->email}}</label>
                    </div>
                    <div class="col-6">
                        <label>Address</label>
                    </div>
                    <div class="col-6">
                        <label>{{$company->address}}</label>
                    </div>
                </div> 
                <hr>
                <a href="{{$company->website}}"> <img src="/image/one.png"  class="rounded" height="60" width="60"> </a>
                <a href="{{$company->linkedin}}"> <img src="/image/three.png"  class="rounded" height="60" width="60"> </a>
                <br>
                <div class="text-right pr-2">
                    <a href="{{ route('company.profile.edit' , $company->id) }}" class="btn btn-primary btn-md mt-2 mb-2">Edit</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
