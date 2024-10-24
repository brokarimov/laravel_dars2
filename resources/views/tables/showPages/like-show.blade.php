@extends('./admin.main')

@section('title', 'Like show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/likes" class="btn btn-primary mt-2">Likes</a>

        <h1>ID: {{ $like->id}}</h1>
        <h1>Post: {{$post->title}}</h1>
        <h2>User: {{$user->name}}</h2>
        <h3>Liked or Disliked: @if ($like->is_active == 1)
            Liked
        @else
            Disliked
        @endif
        </h3>



    </div>
</div>
@endsection