@extends('layouts.app')
@section('content')
    <h1>Post Page</h1>

    @if(count($posts)> 1)
        <ul class="list-group"></ul>
        @foreach($posts as $post)                               
            <li class="list-group-item">
                <h3>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>                   
                </h3>
                <small>Writen on {{$post->created_at}}</small>
            </li>
        @endforeach
    @endif
@endsection