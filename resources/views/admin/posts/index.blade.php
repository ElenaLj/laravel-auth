@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">
                    <ul>
                        @foreach ($posts as $post)
                            <li class="d-flex justify-content-between mb-3">
                                {{$post->title}}
                                <a href="{{route("posts.show", $post->id)}}">
                                    <button type="button" class="btn btn-light">Show</button>
                                </a>
                            </li>
                               
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection