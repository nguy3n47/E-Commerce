@extends('admin.app')
@section('title') Products @endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
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
                <a href="{{route('admin.products.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="align-middle" style="text-align: center">Id</th>
                            <th class="align-middle" style="text-align: center">Thumbnail</th>
                            <th class="align-middle" style="text-align: center; width:150px;">Name</th>
                            <th class="align-middle" style="text-align: center; width:280px;">Gallery</th>
                            <th class="align-middle" style="text-align: center">Price</th>
                            <th class="align-middle" style="text-align: center">Quantity</th>
                            <th class="align-middle" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($products))
                        @foreach($products as $product)
                        <tr>
                            <td class="align-middle" style="text-align: center">{{$product->pro_id}}</td>
                            <td class="align-middle" style="text-align: center; width:200px; height:200px;">
                                <image style="object-fit: cover; width:100%; height:100%;"
                                    src="{{ Storage::url($product->pro_thumbnail)}}"></image>
                            </td>
                            <td class="align-middle" style="text-align: center">{{$product->pro_name}}</td>
                            <td class="" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; width:300px; height:200px;">
                                @if(isset($images))
                                    @foreach($images as $image)
                                        @if($image->product_id == $product->pro_id)
                                            <div style="width:60px; height:60px;">
                                                <image style="object-fit: cover; width:100%; height:100%;" src="{{ Storage::url($image->filename)}}">
                                                </image>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td class="align-middle" style="text-align: center">{{number_format($product->pro_price, 0, '', '.')}} VNĐ</td>
                            <td class="align-middle" style="text-align: center">{{$product->pro_quantity}}</td>
                            <td class="align-middle" style="text-align: center;">
                                <a href="{{route('admin.products.edit', $product->pro_id)}}" class="btn bg-gradient-primary">
                                    <span style="color: White;">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <a href="{{route('admin.products.delete', $product->pro_id)}}" class="btn bg-gradient-danger">
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