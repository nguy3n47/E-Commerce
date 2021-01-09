@extends('frontend.layouts.master')
@section('title','E-Shop || Home')
@section('main-content')
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
    <div class="container">
        <div id="carousel1_indicator" class="intro-banner-wrap carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                <li data-target="#carousel1_indicator" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://portal.vietcombank.com.vn/content/personal/KhoAnh/Anh%20CTKM/The/CTKM%202020/C%20Thao/2020%2012%2018_Shopee_Banner%20web%201200%20x%20300-01.jpg?RenditionID=17"
                class="img-fluid rounded">
                </div>
                <div class="carousel-item">
                <img src="https://www.abenson.com/media/wysiwyg/pages/iphone11preorder-topbanner_1.jpg"
                class="img-fluid rounded">
                </div>
                <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/fe/aa/3e/feaa3e41788e1495f9c7d59edab4ce3e.png"
                class="img-fluid rounded">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> <!-- container //  -->
</section>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title text-center">New Products</h3>
        </header><!-- sect-heading -->
        <div class="row">
            @if(isset($new_products))
            @foreach($new_products as $new_product)
            <div class="col-md-3">
                <div href="{{ route('product.detail', $new_product->pro_slug) }}" class="card card-product-grid" style="height: 360px">
                    <a href="{{ route('product.detail', $new_product->pro_slug) }}" class="img-wrap"> <span
                            class="badge badge-success"> NEW </span> <img
                            src="{{ Storage::url($new_product->pro_thumbnail)}}"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{ route('product.detail', $new_product->pro_slug) }}"
                            class="title">{{ $new_product->pro_name}}</a>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:100%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 0 reviews</span>

                        </div>
                        <div class="price mt-1">{{number_format($new_product->pro_price, 0, '', '.')}} VNĐ</div>
                    </figcaption>
                </div>
            </div>
            @endforeach
            @endif
        </div> <!-- row.// -->
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title text-center">Best Selling Products</h3>
        </header><!-- sect-heading -->

        <div class="row">
            @if(isset($best_selling_products))
            @foreach($best_selling_products as $best_selling_product)
            <div class="col-md-3">
                <div href="{{ route('product.detail', $best_selling_product->pro_slug) }}" class="card card-product-grid" style="height: 360px">
                    <a href="{{ route('product.detail', $best_selling_product->pro_slug) }}" class="img-wrap"> <span
                            class="badge badge-danger"> HOT </span> <img
                            src="{{ Storage::url($best_selling_product->pro_thumbnail)}}"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{ route('product.detail', $best_selling_product->pro_slug) }}"
                            class="title">{{ $best_selling_product->pro_name}}</a>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:100%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 0 reviews</span>

                        </div>
                        <div class="price mt-1">{{number_format($best_selling_product->pro_price, 0, '', '.')}} VNĐ</div>
                    </figcaption>
                </div>
            </div>
            @endforeach
            @endif
        </div> <!-- row.// -->

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-bottom-sm">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title text-center">Most Popular Products</h3>
        </header><!-- sect-heading -->

        <div class="row">
            @if(isset($best_wishlist_products))
            @foreach($best_wishlist_products as $best_wishlist_product)
            <div class="col-md-3">
                <div href="{{ route('product.detail', $best_wishlist_product->pro_slug) }}" class="card card-product-grid" style="height: 360px">
                    <a href="{{ route('product.detail', $best_wishlist_product->pro_slug) }}" class="img-wrap"> <span
                            class="badge badge-warning"> <i class="fas fa-fire"></i></span> <img
                            src="{{ Storage::url($best_wishlist_product->pro_thumbnail)}}"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{ route('product.detail', $best_wishlist_product->pro_slug) }}"
                            class="title">{{ $best_wishlist_product->pro_name}}</a>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:100%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating text-muted"> 0 reviews</span>

                        </div>
                        <div class="price mt-1">{{number_format($best_wishlist_product->pro_price, 0, '', '.')}} VNĐ</div>
                    </figcaption>
                </div>
            </div>
            @endforeach
            @endif
        </div> <!-- row.// -->

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION  END// ========================= -->

<!-- ========================= SECTION  END// ======================= -->
@endsection