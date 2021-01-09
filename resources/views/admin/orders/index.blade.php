@extends('admin.app')
@section('title') Orders @endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Orders</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
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
                            <th class="align-middle" style="text-align: center">Order ID</th>
                            <th class="align-middle" style="text-align: center">Name</th>
                            <th class="align-middle" style="text-align: center">Phone</th>
                            <th class="align-middle" style="text-align: center">Address</th>
                            <th class="align-middle" style="text-align: center">Total</th>
                            <th class="align-middle" style="text-align: center">Status</th>
                            <th class="align-middle" style="text-align: center">Created At</th>
                            <th class="align-middle" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($orders))
                        @foreach($orders as $order)
                        <tr>
                            <td class="align-middle" style="text-align: center">
                                <a href="#" class="title">{{$order->order_number}}</a>
                            </td>
                            <td class="align-middle" style="text-align: center">{{$order->fullname}}</td>
                            <td class="align-middle" style="text-align: center">{{$order->phone}}</td>
                            <td class="align-middle" style="text-align: center">{{$order->address}}</td>
                            <td class="align-middle" style="text-align: center">{{number_format($order->sub_total, 0, '', '.')}} ₫</td>
                            <td class="align-middle" style="text-align: center">
                                @if($order->status == 'pending')
                                    <span class="badge badge-secondary"> {{$order->status}} </span>
                                @elseif($order->status == 'process')
                                    <span class="badge badge-info"> {{$order->status}} </span>
                                @elseif($order->status == 'shipping')
                                    <span class="badge badge-primary"> {{$order->status}} </span>
                                @elseif($order->status == 'delivered')
                                    <span class="badge badge-success"> {{$order->status}} </span>
                                @elseif($order->status == 'cancel')
                                    <span class="badge badge-danger"> {{$order->status}} </span>
                                @endif
                            </td>
                            <td class="align-middle" style="text-align: center">{{$order->created_at}}</td>
                            <td class="align-middle" style="text-align: center">
                                <a href="{{route('admin.orders.detail', $order->order_number)}}" class="btn bg-gradient-primary">
                                    <span style="color: White;">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </a>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle {{ $order->status == 'cancel' ? 'disabled' : '' }}" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Status
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.orders.update',[$order->id, 'pending'])}}">Pending</a>
                                        <a class="dropdown-item" href="{{route('admin.orders.update',[$order->id, 'process'])}}">Process</a>
                                        <a class="dropdown-item" href="{{route('admin.orders.update',[$order->id, 'shipping'])}}">Shipping</a>
                                        <a class="dropdown-item" href="{{route('admin.orders.update',[$order->id, 'delivered'])}}">Delivered</a>
                                        <a class="dropdown-item" href="{{route('admin.orders.update',[$order->id, 'cancel'])}}">Cancel</a>
                                    </div>
                                </div>

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