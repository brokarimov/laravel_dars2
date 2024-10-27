@extends('./admin/main')


@section('title', 'Companies')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Companies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Companies</li>
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
                    @if (session('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('danger')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="/company-create" class="btn btn-primary">Create</a>
                    <div class="card mt-2">
                    <form action="/company-search" method="GET">
                            @csrf
                            <div class="input-group col-12 mt-2">
                                <input type="text" name="search" class="form-control search-bar" id="search-bar" placeholder="Search">
                                <div class="input-group-append">
                                    <button name="ok" class="btn btn-primary form-control btn-search">Search</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.card-header -->
                        <div class="card-body">

                        
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>User</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{$company['id']}}</td>
                                            <td>{{$company['name']}}</td>
                                            <td>
                                                @foreach ($users as $user)
                                                    @if ($company->user_id == $user->id)
                                                        {{$user->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <form action="/product2-create" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                                                    <button type="submit" class="btn btn-primary">Create Product</button>
                                                </form>
                                                <form action="/company/{{$company->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                                </form>

                                                <a href="/company-update/{{$company->id}}" class="btn btn-warning">Update</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                     <div>
                     {{ $companies->links() }}

                     </div>
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