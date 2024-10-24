@extends('.admin.main')

@section('title', 'Create')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Like Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Like Create</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <a href="/likes" class="btn btn-primary">Likes</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Like Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/create-like" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    

                                    <label for="exampleInputEmail1">Posts</label>
                                    <select class="form-control" name="post_id">
                                        @foreach ($posts as $post)
                                            <option value="<?= $post->id ?>"><?= $post->title ?></option>
                                        @endforeach
                                    </select>
                                    @error('post_id')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror


                                    <label for="exampleInputEmail1">Users</label>
                                    <select class="form-control" name="user_id">
                                        @foreach ($users as $user)
                                            <option value="<?= $user->id ?>"><?= $user->name ?></option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Like or Dislike</label>
                                    <select class="form-control" name="is_active">
                                        <option value="0">Dislike</option>
                                        <option value="1">Like</option>
                                    </select>
                                    @error('is_active')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror
                                    




                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
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