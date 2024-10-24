@extends('./admin.main')

@section('title', 'User show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/" class="btn btn-primary mt-2">Users</a>

        <h1>ID: {{ $user->id}}</h1>
        <h2>Name: {{ $user->name}}</h2>
        <h3>Email: {{ $user->email}}</h3>

    </div>
</div>
@endsection