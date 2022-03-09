@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
                <div class="card-header">{{ __('Edit your Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('posts.update', $post->id)}}">
                        @csrf
                        <label>Titulo:</label><br>
                        <input type="text" id="title" name="title" style="width: 600px" value="{{$post->title}}"><br><br>
                        <input type="text "id="contents" name="contents" style="width:600px; height:80px"; value="{{$post->contents}}"><br><br>
                        <input class="btn btn-primary" type="submit" value="Post" ><br>
                        </form> 
                </div>
            </div>
        </div>
    </div>
    @endsection