@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($jobposts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/storage/cover_images/{{$post->logo}}" width="200px" height="100px" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('show.jobs.id' , $post->id) }}"><h5 class="card-title">{{$post->title}}</h5></a> 
                        <small class="card-title">by {{$post->companyname}}</small>
                        <br>
                        <small class="card-title">Experience {{$post->experience}}</small>
                        <br>
                        <small class="card-title">Salary {{$post->salary}}</small>
                        <small> <p class="card-text">{{$post->created_at}}</p> </small> 
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
