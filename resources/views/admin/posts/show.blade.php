@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <p>{{$post->content}}</p>
                    <a href="{{route("posts.index")}}">
                        <button type="button" class="btn btn-dark">Go back</button>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection