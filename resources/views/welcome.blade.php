@extends('layouts.front')

@section('banner')
    <div class="jumbotron">
        <div class="container">
           
            <img src="logo3.gif" alt="Girl in a jacket" style="width:200px;height:150px;"> 
            <h1>Police Department Community Forum</h1>
           
            <p>
                <a class="btn btn-primary btn-lg">Utumishi kwa Wote</a>
            </p>
        </div>
    </div>
@endsection
@section('heading',"Threads")
@section('content')
    @include('thread.partials.thread-list')
@endsection