@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h5> Edit User Profile </h5>  
        </div>
        <form class="m-5" method="POST" action="{{ route('user.profile.store' , $user->id) }}" enctype = "multipart/form-data"  >
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label >First Name</label>
                <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}">
                </div>
                <div class="form-group col-md-6">
                    <label >Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label >Email</label>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}" >
                </div>
                <div class="form-group col-md-6">
                    <label >Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label >Gender</label>
                    <select id="gender" type="text" class="form-control" name="gender" >
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label >Birthday</label>
                    <input type="date" class="form-control" name="birthday" value="{{$user->birthday}}">
                </div>
            </div>
            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control" name="address" value="{{$user->address}}">
            </div>
            <div class="form-group">
                <label >About me</label>
                <textarea type="text" class="form-control" rows="5" name="aboutme" > {{$user->aboutme}} </textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label >Portfolio</label>
                    <input type="text" class="form-control" name="portfolio" value="{{$user->portfolio}}" >
                </div>
                <div class="form-group col-md-4">
                    <label >Github</label>
                    <input type="text" class="form-control" name="github" value="{{$user->github}}">
                </div>
                <div class="form-group col-md-4">
                    <label >Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" value="{{$user->linkedin}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label >Upload image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" ></label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label >Upload resume</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="resume" id="inputGroupFile02"/>
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
@endsection
