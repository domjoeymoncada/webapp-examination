@extends('main')

@section('content')
<h1 class="display-4">
    {{ $article->title }}
    <small class="text-muted">{{ $article->created_at }}</small>
</h1>
<p class="lead">
  {{ $article->content }}
</p>

<p class="lead">
    {{ $article->votes }}
</p>

<button type="button" class="btn btn-success">Upvote</button>
<button type="button" class="btn btn-danger">Downvote</button>
@endsection