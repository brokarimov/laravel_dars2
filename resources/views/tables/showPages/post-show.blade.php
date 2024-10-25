@extends('./admin.main')

@section('title', 'Post show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/posts" class="btn btn-primary mt-2">Posts</a><br>
        <img class="mt-2" src="{{asset($post->image)}}" width="200px" alt="">
        <h1>ID: {{ $post->id}}</h1>
        <h2>Title: {{ $post->title}}</h2>
        <h4>Text: {{$post->body}}</h4>
        <h5>Likes: {{$post->likes}}</h5>
        <h5>Dislikes: {{$post->dislikes}}</h5>



    </div>
</div>
@endsection