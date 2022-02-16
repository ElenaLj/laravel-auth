@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Post</h4>
                </div>

                <div class="card-body">
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf

                        {{-- Post Title --}}
                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Insert title here">
                        </div>

                        {{-- Post Content --}}
                        <div class="form-group">
                            <label for="content">Post content</label>
                            <textarea name="content" class="form-control" id="content" rows="10" placeholder="Insert text here"></textarea>
                        </div>

                        {{-- Checkbox --}}
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="published" name="published">
                            <label class="form-check-label" for="published">Publish</label>
                        </div>

                        {{-- Sumbit Button --}}
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>

                    <div class="mt-3">
                        <a href="{{route("posts.index")}}">
                            <button type="button" class="btn btn-dark">Go back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
@endsection