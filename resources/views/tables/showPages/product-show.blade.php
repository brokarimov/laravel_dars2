@extends('./admin.main')

@section('title', 'Product show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/products" class="btn btn-primary mt-2">Products</a>

        <h1>ID: {{ $product->id}}</h1>
        <h1>Product: {{$product->name}}</h1>
        <h2>Category: {{$category->name}}</h2>
        <h2>User: {{$user->name}}</h2>
        <h3>Price: ${{$product->price}}</h3>
        <h3>Image: {{$product->images}}</h3>
        <h4>Count: {{$product->count}}</h4>
    </div>
</div>
@endsection