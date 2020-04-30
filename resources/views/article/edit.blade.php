@extends('main')

@section('content')
<form method="POST" action="{{ action('ArticleController@update', $article->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Article Title</span>
    </div>
    <input type="text" name="article_title" value="{{ $article->title }}" class="form-control" placeholder="Article title..." aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Article Content</span>
    </div>
    <input type="text" name="article_content" value="{{ $article->content }}" class="form-control" placeholder="Article content..." aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection