@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($jobposts as $post)
        <div class="card mb-2">
            <div class="card-body">
                <a href="{{ route('jobpost.show' , $post->id) }}"><h5 class="card-title">{{$post->title}}</h5></a>
                <small> <p class="card-text">{{$post->created_at}}</p> </small>
            </div>
        </div>
    @endforeach
</div>
@endsection
