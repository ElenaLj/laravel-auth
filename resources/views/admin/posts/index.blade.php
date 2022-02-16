@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">
                    {{-- <ul>
                        @foreach ($posts as $post)
                            <li class="d-flex justify-content-between mb-3">
                                {{$post->title}}
                                <a href="{{route("posts.show", $post->id)}}">
                                    <button type="button" class="btn btn-light">Show</button>
                                </a>
                            </li>
                               
                        @endforeach
                    </ul> --}}
                    <div class="mb-3">
                        <a href="{{route("posts.create")}}">
                            <button type="button" class="btn btn-dark">Add Post</button>
                        </a>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <a href="{{route("posts.show", $post->id)}}">
                                        <button type="button" class="btn btn-light">Show</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection