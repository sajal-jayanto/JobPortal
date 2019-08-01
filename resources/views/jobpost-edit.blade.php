@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
        <h5> Create A Job Post {{$jobpost->id}} </h5>  
        </div>
        <form class="m-5" method="POST" action="{{ route('jobpost.update') }}" >
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
                <label >Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label >Description</label>
                <textarea type="text" class="form-control" rows="8" name="description" id="article-ckeditor"> </textarea>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <div class="form-group">
                <label>Experience</label>
                <input type="text" class="form-control" name="experience">
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" class="form-control" name="contact">
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
</div>
@endsection
