@extends('.admin.main')

@section('title', 'Create')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post Create</li>
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
                    <a href="/posts" class="btn btn-primary">Posts</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Post Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/create-post" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter title">
                                    @error('title')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror
                                    <label for="exampleInputEmail1">Text</label>
                                    <input type="text" name="body" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter text">
                                    @error('body')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Likes</label>
                                    <input type="text" name="likes" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Likes">
                                    @error('likes')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Dislikes</label>
                                    <input type="text" name="dislikes" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Dislikes">
                                    @error('dislikes')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror
                                </div>



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