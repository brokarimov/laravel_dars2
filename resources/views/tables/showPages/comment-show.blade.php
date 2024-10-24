@extends('./admin.main')

@section('title', 'Comment show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/comments" class="btn btn-primary mt-2">Comments</a>

        <h1>ID: {{ $comment->id}}</h1>
        <h2>Comment: {{ $comment->text}}</h2>
        <h4>Post: {{$post->title}}</h4>
        


    </div>
</div>
@endsection