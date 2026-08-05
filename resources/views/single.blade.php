@extends('layouts.main')
@section('container')
    <div class="article mb-3">
        <h3> Title :  {{ $stories["title"] }} </a> </h3>    
        <h4> Author : {{ $stories["author"] }} </h4>    
        <article> {{ $stories["text"] }} </article>
    </div>
    <a href="/stories"> Back </a>
@endsection