@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('posts.store')}}">
                        @csrf
                        <label>Titulo:</label><br>
                        <input type="text" id="title" name="title" style="width: 500px" required><br><br>
                        <textarea id="contents" name="contents" cols="60" rows="5"></textarea><br>
                        <input class="btn btn-primary" type="submit" value="Post" ><br>
                        </form> 
                </div>
            </div>
        </div>
    </div>
    <div class="p-2">
        
        @foreach ($posts as $post)    

        <div>
            <h3>Title: {{$post->title}}</h3>
            {{$post->contents}}  
        </div>
        <br><h2><a>
             
        </a><br></h2>
        @endforeach
    
    </div>
</div>
@endsection
