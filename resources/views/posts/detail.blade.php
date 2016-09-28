@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$post->title}}
                    <span class="pull-right">{{$post->user->name}}</span>
                </div>

                <div class="panel-body">
                    {!! $post->detail_text !!}
                    <div>
                        <a href="javascript:history.back();">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection