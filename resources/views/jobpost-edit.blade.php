@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
        <h5> Edit A Job Post </h5>  
        </div>
        <form class="m-5" method="POST" action="{{ route('jobpost.update' , $jobpost->id ) }}" >
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
                <label >Title</label>
            <input type="text" class="form-control" name="title" value="{{$jobpost->title}}">
            </div>
            <div class="form-group">
                <label >Description</label>
                <textarea type="text" class="form-control" rows="8" name="description" id="article-ckeditor"> {{$jobpost->description}} </textarea>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" value="{{$jobpost->salary}}">
            </div>
            <div class="form-group">
                <label>Experience</label>
                <input type="text" class="form-control" name="experience" value="{{$jobpost->experience}}">
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" class="form-control" name="contact" value="{{$jobpost->contact}}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection
