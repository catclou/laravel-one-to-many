@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column justify-content-center align-items-center p-5 mb-5 text-light">
    <img src="{{$post->image}}" alt="{{$post->title}}" width="50%">
    <h1 class="m-3 mt-5">{{$post->title}}</h1>
    <div class="d-flex">

        <span class="font-italic">Postato il {{ $post->created_at }} </span>

        @if($post->Category)
        <span class="badge badge-pill badge-{{$post->Category->color}} mx-3 d-flex align-items-center"> {{$post->Category->label}} </span>
        @else
            <span class="badge badge-pill badge-light mx-3 d-flex align-items-center"> <i class="fa-solid fa-circle-xmark mr-1"></i> nessuna categoria </span>
        @endif

    </div>
    <p class="lead m-3 mb-5 text-justify">{{$post->content}}</p>
</div>

@endsection