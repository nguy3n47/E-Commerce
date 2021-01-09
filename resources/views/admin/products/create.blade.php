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
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="card-body col-sm-8">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" required class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" name="sku" required class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gallery">Gallery</label>
                            <div name="gallery" class="input-images"></div>
                            <!-- <input required type="file" class="form-control" name="images[]" multiple> -->
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    <div class="card-body col-sm-4">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">------------------</option>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <option value="{{$category->c_id}}">{{$category->c_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input required type="number" name="price" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input required type="number" name="quantity" class="form-control" value="0" placeholder="">
                        </div>
                        <div class="form-group image-upload">
                            <label for="thumbnail">Thumbnail
                                <div class="upload-icon">
                                    <image class="icon"></image>
                                </div>
                            </label>
                            <input required class="form-control" id="thumbnail" name="thumbnail" type="file" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link type="text/css" rel="stylesheet" href="{{ asset('backend/css/image-uploader.min.css') }}">
<style>
.image-upload>input {
    display: none;
}

.upload-icon {
    width: 385px;
    height: 385px;
    border: 1px solid #ced4da;
    border-radius: 10px;
}

.upload-icon.has-img {
    width: 385px;
    height: 385px;
}

.upload-icon.has-img img {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    margin: 0px;
    object-fit: cover;
}
</style>
@endpush
@push('scripts')
<!-- jquery-validation -->
<script src="{{ asset('backend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/image-uploader.min.js') }}"></script>
<!-- page script -->
<script type="text/javascript">
$('.input-images').imageUploader();

$('#thumbnail').change(function(event) {
    $("img.icon").attr('src', URL.createObjectURL(event.target.files[0]));
    $("img.icon").parents('.upload-icon').addClass('has-img');
});
</script>
@endpush