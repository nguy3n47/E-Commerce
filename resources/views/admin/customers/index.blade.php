@extends('admin.app')
@section('title') Customers @endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Customers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Customers</li>
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
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="align-middle" style="text-align: center">Id</th>
                            <th class="align-middle" style="text-align: center">Avatar</th>
                            <th class="align-middle" style="text-align: center">Name</th>
                            <th class="align-middle" style="text-align: center">Email</th>
                            <th class="align-middle" style="text-align: center">Phone</th>
                            <th class="align-middle" style="text-align: center">Address</th>
                            <th class="align-middle" style="text-align: center">Status</th>
                            <th class="align-middle" style="text-align: center">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($customers))
                        @foreach($customers as $customer)
                        <tr>
                            <td class="align-middle" style="text-align: center">{{$customer->id}}</td>
                            <td class="align-middle" style="text-align: center; width:200px; height:200px;">
                                <image style="object-fit: cover; width:100%; height:100%;"
                                    src="{{ Storage::url($customer->avatar)}}"></image>
                            </td>
                            <td class="align-middle" style="text-align: center">{{$customer->name}}</td>
                            <td class="align-middle" style="text-align: center">{{$customer->email}}</td>
                            <td class="align-middle" style="text-align: center">{{$customer->phone}}</td>
                            <td class="align-middle" style="text-align: center">{{$customer->address}}</td>
                            <td class="align-middle" style="text-align: center">{{$customer->status}}</td>
                            <td class="align-middle" style="text-align: center">{{$customer->created_at}}</td>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush
@push('scripts')
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!-- page script -->
<script>
$(function() {
    $("#example").DataTable({
        "responsive": true,
        "autoWidth": false,
        "order": []
    });
});
</script>
@endpush