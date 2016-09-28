@extends('layouts.app')

@section('content')
    {!! $posts->render() !!}
    @foreach($posts as $post)
        <div class="media">
            <div class="media-left media-middle">
                <a href="{{url('/posts', $post->id)}}">
                    <img class="media-object" src="/uploads/posts/resize/{{$post->preview_image}}" alt="{{$post->title}}">
                </a>
            </div>
            <div class="media-body">
                <a href="{{url('/posts', $post->id)}}"><h3 class="media-heading">{{$post->title}}</h3></a>
                {!! $post->preview_text !!}
            </div>
            <div class="media-bottom media-middle">
                <button class="pull-right btn btn-success btn-xs plus"><i class="fa fa-plus"></i></button>
                <span class="pull-right rating" data-post="{{$post->id}}">{{$post->rating}}</span>
                <button class=" pull-right btn btn-danger btn-xs minus"><i class="fa fa-minus"></i></button>
            </div>
        </div>
    @endforeach
    {!! $posts->render() !!}
@endsection