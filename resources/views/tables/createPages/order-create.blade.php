@extends('.admin.main')

@section('title', 'Create')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order Create</li>
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
                    <a href="/orders" class="btn btn-primary">Orders</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Order Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/order-product" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">

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

                                    <label for="exampleInputEmail1">Owner</label>
                                    <select class="form-control" name="owner_id">
                                        @foreach ($users as $user)
                                            <option value="<?= $user->id ?>"><?= $user->name ?></option>
                                        @endforeach
                                    </select>
                                    @error('owner_id')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Products</label>
                                    <select class="form-control" name="product_id">
                                        @foreach ($products as $product)
                                            <option value="<?= $product->id ?>"><?= $product->name ?></option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
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

                                    <label for="exampleInputEmail1">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                    @error('status')
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