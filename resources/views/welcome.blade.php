@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4 text-center">WelCome to our JobPostal Side </h1>
                <p class="lead text-center">This is an open-source side you can find you'r require jobs here for totally free. </p>
                <hr class="my-4">
                <p class="lead text-center">This is an open-source side you can find you'r require candidate here for totally free.</p>
                <div style="text-align: center; width: 90%">
                <a href="{{ route('showjobs') }}" class="btn btn-primary btn-md"  role="button">search jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
