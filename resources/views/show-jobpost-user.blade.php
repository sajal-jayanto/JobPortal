@extends('layouts.app')

@section('content')
<div class="container">
    <hr>
    <h4 class="text-center"> {{ $jobpost->title }} </h4>
    
    <hr>
    <div class="container">
        <h5 class="m-2">Job Description</h5>
        <p> {!! $jobpost->description !!}  </p>
    </div>
    <div class="container">
        <h5 class="m-2">Experience</h5>
        <p class="ml-2"> {{ $jobpost->experience }} </p>
    </div>
    <div class="container">
        <h5 class="m-2">Salary</h5>
        <p class="ml-2"> {{ $jobpost->salary }}
    </div>
    <div class="container text-center">
        <h5 class="m-2 ">Contact</h5>
        <p> {{$jobpost->contact}}  </p>
        <hr> 
        <form method="POST" action="{{route('apply' , $jobpost->id) }}">
            @csrf
            <input type="hidden" value="{{$jobpost->id}}" name="post_id" >
            <button type="submit" class="btn btn-primary mb-5">Apply</button>
        </form>
    </div>
</div>
@endsection
