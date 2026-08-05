@extends('layouts.main')
@section('container')

<h2> {{ $title }} </h2>
{{-- start input pencarian --}}
<div class="row">
    <div class="cols-4">
        <div class="input-group mt-3">
        <input type="text" class="form-control" placeholder="Find your story is here" aria-label="Recipient’s username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
    </div>
</div>
{{-- end input pencarian --}}

@if ($stories->count())
    <div class="card mb-3 mt-3">
    <img src="https://source.unsplash.com/?horor" width="1000" height="400"  class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{ $stories[0]->title }}</h5>
    <p class="card-text">by. {{ $stories[0]->users->name }}  </p>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-body-secondary">{{ $stories[0]->created_at->diffForHumans() }}</small></p>
    
  </div>
</div>
@else
    <p class="text-center fs-4"> Story not found </p>    
@endif


@foreach ($stories->skip(1) as $story)
    <div class="article mt-4">
        <h3> Title : <a href="/stories/{{ $story->slug }}"> {{ $story->title }} </a> </h3>    
        <h5>  Author : <a href="/author/{{ $story->users->username }}"> {{ $story->users->name }} </a> </h5>    
        <article> {{ $story["text"] }} </article>
    </div>
@endforeach    

@endsection