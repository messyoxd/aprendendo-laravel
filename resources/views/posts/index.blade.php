@extends ('layouts.layout')

@section('title')
    <title>Posts</title>
@endsection

@section('content')

        <h2 class="blog-post-title">Lista de posts</h2>
        @if(count($posts))
          <ul>
            @foreach($posts as $post)
              <li>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
              </li>
            @endforeach
          </ul>
        @else
          <p>
            Não há posts!
          </p>
        @endif

        <a class="btn btn-sm btn-primary" href="/create">Crie um post</a>
        <hr>
        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

@endsection
