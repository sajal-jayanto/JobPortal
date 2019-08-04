@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1">
            <a href="{{ route('jobpost.index') }}" class="btn btn-primary btn-md mt-2 mb-2">Back</a> 
        </div>
        <div class="col-md-8">
        </div>
        <div class="col-md-1">
            <a href="{{ route('jobpost.edit' , $jobpost->id) }}" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-md-1">
            <form action="{{url('jobpost', [$jobpost->id])}}" method="POST">
                {{ method_field('DELETE') }}
                @csrf
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>    
        </div>
    </div>

    <hr>
    <h4 class="text-center"> {{ $jobpost->title }} </h4>
    
    <hr>
    <h4 class="m-2">Job Description</h4>
        {!! $jobpost->description !!}
    <h4 class="m-2">Experience</h4>
        {{ $jobpost->experience }}
    <h4 class="m-2">Salary</h4>
        {{ $jobpost->salary }}
    <h4 class="m-2">Contact</h4>
        {{$jobpost->contact}}
    <hr>
</div>
@endsection
