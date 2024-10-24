@extends('./admin.main')

@section('title', 'Order show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/orders" class="btn btn-primary mt-2">orders</a>

        <h1>ID: {{ $order->id}}</h1>
        <h1>Product: {{$product->name}}</h1>
        <h2>User: {{$user->name}}</h2>
        <h2>Owner: {{$owner->name}}</h2>
        <h4>Count: {{$order->count}}</h4>
        <h4>Status: 
            @if ($order->status == 1)
                Active
            @else
                Inactive
            @endif
        </h4>

    </div>
</div>
@endsection