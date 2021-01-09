@extends('admin.app')
@section('title') Categories @endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.categories.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th style="text-align: center">Status</th>
                            <th>Created At</th>
                            <th style="text-align: center; width: 100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($categories))
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->c_id}}</td>
                            <td>{{$category->c_name}}</td>
                            <td style="text-align: center">{{$category->getStatus($category->c_active)['name']}}</td>
                            <td>{{$category->created_at}}</td>
                            <td style="text-align: center">
                                <a href="{{route('admin.categories.edit', $category->c_id)}}" class="btn bg-gradient-primary">
                                    <span style="color: White;">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <a href="{{route('admin.categories.delete', $category->c_id)}}"
                                    class="btn bg-gradient-danger">
                                    <span style="color: White;">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@push('scripts')
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!-- page script -->
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});
</script>
@endpush