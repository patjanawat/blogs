@extends('layouts.app')
@section('content')
    <h1>Post Page</h1>

    @if(count($posts)> 0)
        <ul class="list-group"></ul>
        @foreach($posts as $post)                               
            <li class="list-group-item">
                <h3>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>                   
                </h3>
                <small>Writen on {{$post->created_at}}</small>
            </li>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection