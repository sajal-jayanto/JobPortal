@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($jobposts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/storage/cover_images/{{$company->logo}}" width="200px" height="100px" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('jobpost.show' , $post->id) }}"><h5 class="card-title">{{$post->title}}</h5></a>
                        <small> by {{$company->companyname}} </small>
                        <small> <p class="card-text">{{$post->created_at}}</p> </small>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('jobpost.show' , $post->id) }}" class="btn btn-primary">view</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
