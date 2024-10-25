@extends('./admin.main')

@section('title', 'User show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/users2" class="btn btn-primary mt-2">Users</a>

        <h1>ID: {{ $user2->id}}</h1>
        <h2>Name: {{ $user2->name}}</h2>
        <h3>Email: {{ $user2->email}}</h3>

    </div>
</div>
@endsection