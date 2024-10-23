@extends('./admin/main')


@section('title', 'Likes')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Likes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Likes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Like or Dislike</th>
                                        <th>User</th>
                                        <th>Post ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($likes as $like)
                                        <tr>
                                            <td>{{$like['id']}}</td>

                                            <td>
                                                @if ($like['is_active'] == 1)
                                                    Liked
                                                @elseif($like['is_active'] == 0)
                                                    Disliked
                                                @endif
                                            </td>
                                            <td>@foreach ($users as $user)
                                                @if ($user['id'] == $like['user_id'])
                                                    {{$user['name']}}
                                                @endif
                                            @endforeach
                                            </td>
                                            <td>{{$like['post_id']}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>


@endsection