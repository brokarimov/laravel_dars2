@extends('.admin.main')

@section('title', 'Create')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Create</li>
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
                    <a href="/products" class="btn btn-primary">Products</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Product Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/create-product" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter name">
                                    @error('name')
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

                                    

                                    <label for="exampleInputEmail1">Price</label>
                                    <input class="form-control" type="text" name="price" placeholder="Enter price">
                                    @error('price')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Image</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="images" class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                    @error('images')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Count</label>
                                    <input class="form-control" type="text" name="count" placeholder="Enter count">
                                    @error('count')
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