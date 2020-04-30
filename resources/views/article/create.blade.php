@extends('main')

@section('content')
<form method="POST" action="{{ action('ArticleController@store') }}">
    {{ csrf_field() }}
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Article Title</span>
    </div>
    <input type="text" name="article_title" class="form-control" placeholder="Article title..." aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Article Content</span>
    </div>
    <input type="text" name="article_content" class="form-control" placeholder="Article content..." aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection