@extends('main')

@section('content')
        <a href="{{ action('ArticleController@create') }}"><button type="submit" class="btn btn-primary">Create New Article</button></a>

        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            <tbody>
                @foreach($articles as $article)
                <tr onClick=>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>
                        <a href="{{ action('ArticleController@show', $article->id) }}"><button type="button" class="btn btn-primary">View</button></a>
                        <a href="{{ action('ArticleController@edit', $article->id) }}"><button type="button" class="btn btn-secondary">Edit</button></a>

                        <form method="POST" action="{{ action('ArticleController@destroy', $article->id) }}">
                            {{ csrf_field() }}
                            {!! method_field('DELETE') !!}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                <tr>
                @endforeach
            </tbody>
        </thead>
        </table>
@endsection