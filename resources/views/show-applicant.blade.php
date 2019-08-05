@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($applicants as $applicant)
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/storage/cover_images/{{$applicant->image}}" width="200px" height="150px" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">{{$applicant->firstname}} {{$applicant->lastname}}</h5> 
                        <small class="card-title">Email : {{$applicant->email}}</small>
                        <br>
                        <small class="card-title">Phone : {{$applicant->phone}} </small>
                        <br>
                        <a href="{{route('downlode' , $applicant->resume)}}" class="btn btn-primary btn-md mt-2 mb-2">Downlode Resume</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
