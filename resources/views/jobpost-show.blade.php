@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('jobpost.index') }}" class="btn btn-primary btn-md mt-2 mb-2">Back</a> 
    <hr>
    <h4 class="text-center"> {{ $jobpost->title }} </h4>
    <hr>
    <h4> Job Description </h4>
    {!! $jobpost->description !!}
    <h4> Experience </h4>
    {{ $jobpost->experience }}
    <h4> Salary </h4>
    {{ $jobpost->salary }}
    <h4> Contact </h4>
    {{$jobpost->contact}}
</div>
@endsection
