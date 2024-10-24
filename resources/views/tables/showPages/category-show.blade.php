@extends('./admin.main')

@section('title', 'Category show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/categories" class="btn btn-primary mt-2">Categories</a>

        <h1>ID: {{ $category->id}}</h1>
        <h2>Name: {{ $category->name}}</h2>

    </div>
</div>
@endsection