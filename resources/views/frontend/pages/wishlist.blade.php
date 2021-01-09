@extends('frontend.layouts.master')
@section('title', 'E-Shop || Wish List')
@section('main-content')
<section class="section-pagetop bg">
    {{ csrf_field() }}
    <div class="container">
        <h2 class="title-page">Wish List</h2>
    </div> <!-- container //  -->
</section>
@if($items->count() > 0)
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            @foreach($items as $item)
            <div class="col-md-3">
                <figure class="card card-product-grid  mb-3">
                    <div class="img-wrap"> <img src="{{ Storage::url($item->pro_thumbnail) }}"> </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title text-truncate">{{$item->pro_name}}</a>
                        <p class="price mb-2">{{number_format($item->pro_price, 0, '', '.')}} VNĐ</p>
                        <a href="#" class="btn btn-primary btn-sm"> Add to cart </a>
                        <a href="{{route('user.wishlist.delete', $item->product_id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title=""
                            data-original-title="Remove from wishlist"> <i class="fa fa-times"></i> </a>
                    </figcaption>
                </figure>
            </div> <!-- col.// -->
            @endforeach
        </div> <!-- row .//  -->
    </div> <!-- container .//  -->
</section>
@else
<div class="container text-center">
    <image class="img-fluid" width="60%" src="https://i.pinimg.com/originals/ae/8a/c2/ae8ac2fa217d23aadcc913989fcc34a2.png"></image>
</div>
@endif
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
@endpush