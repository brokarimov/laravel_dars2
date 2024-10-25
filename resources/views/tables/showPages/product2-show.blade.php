@extends('./admin.main')

@section('title', 'Product show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/products2" class="btn btn-primary mt-2">Products</a><br>
        
        <img class="mt-2" src="{{asset($product2->image)}}" width="200px" alt="">
        
        <h1>ID: {{ $product2->id}}</h1>
        <h1>Product: {{$product2->name}}</h1>
        <h2>Company: {{$company->name}}</h2>
        <h3>Price: ${{$product2->price}}</h3>
        <h4>Count: {{$product2->count}}</h4>
    </div>
</div>
@endsection