@extends('./admin.main')

@section('title', 'Company show')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <a href="/companies" class="btn btn-primary mt-2">Companies</a>

        <h1>ID: {{ $company->id}}</h1>
        <h2>Owner: 
            @foreach ($users2 as $user)
            @if ($company->user2_id == $user->id)
                {{$user->name}}
            @endif
        @endforeach
        </h2>

    </div>
</div>
@endsection