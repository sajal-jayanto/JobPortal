@extends('layouts.app')

@section('content')
<div class="container">

    @if($user->resume == "" || $user->image == "" || $user->portfolio == "" || $user->github == "" || $user->linkedin == "")
        <div class="alert alert-danger" role="alert">
            Please Complete Your Profile !  <a href="{{ route('user.profile.edit' , $user->id) }}"> Edit Your Profile </a>
        </div>
    @endif
    
    <div class="card">

       
        
        <div class="card-header text-center">
                <h5> User Profile </h5>  
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <div class="text-center">
                    <div class="container pt-2"> 
                    <img src="/storage/cover_images/{{$user->image}}" width="250px" height="150px" alt=""/>
                    </div>
                    <div class="col-10 offset-1 pt-3">
                        <h6> About Me </h6> 
                        <p >The truth is that About me pages or of course about us pages are almost always one of the most visited pages on any website.
                            e dealing with if it is a business about page. They love seeing the face behind the blog or business!</p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-8">
                <h3 class="pb-2"> {{$user->firstname}} {{$user->lastname}} </h3>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label>First Name</label>
                    </div>
                    <div class="col-6">
                        <label >{{$user->firstname}}</label>
                    </div>
                    <div class="col-6">
                        <label>Last Name</label>
                    </div>
                    <div class="col-6">
                        <label  >{{$user->lastname}}</label>
                    </div>

                    <div class="col-6">
                        <label>Email</label>
                    </div>
                    <div class="col-6">
                        <label >{{$user->email}}</label>
                    </div>
                    <div class="col-6">
                        <label>Phone</label>
                    </div>
                    <div class="col-6">
                        <label >{{$user->phone}}</label>
                    </div>
                    <div class="col-6">
                        <label>Gender</label>
                    </div>
                    <div class="col-6 ">
                        <label >{{$user->gender}}</label>
                    </div>
                    <div class="col-6">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-6">
                        <label >{{$user->birthday}}</label>
                    </div>
                    <div class="col-6">
                        <label>Address</label>
                    </div>
                    <div class="col-6">
                        <label>{{$user->address}}</label>
                    </div>
                </div> 
                <hr>
                <img src="/image/one.png" alt="..." class="rounded" height="60" width="60">
                <img src="/image/two.png" alt="..." class="rounded" height="60" width="60">
                <img src="/image/three.png" alt="..." class="rounded" height="60" width="60">
                <br>
                <div class="text-right pr-2">
                    <a class="btn btn-primary btn-lg mt-2 mb-2" href="{{ route('user.profile.edit' , $user->id) }}">Edit</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
