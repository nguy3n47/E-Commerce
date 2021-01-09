@extends('frontend.layouts.master')
@section('title', 'E-Shop'.' || '.$product_detail->pro_name)
@section('main-content')
<section class="section-content">
    <div class="container">
        {{ csrf_field() }}
        <div class="card" style="margin-top:20px; margin-bottom:20px;">
            <div class="row no-gutters">
                <aside class="col-md-6">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <a><img id="thumbnailImg" src="{{ Storage::url($product_detail->pro_thumbnail) }}"></a>
                        </div> <!-- img-big-wrap.// -->
                        <div class="thumbs-wrap">
                            <a class="item-thumb"><img style="object-fit: cover; width:100%; height:100%;"
                                    src="{{ Storage::url($product_detail->pro_thumbnail)}}"
                                    onclick="changeImage(this);"></a>
                            @foreach($images as $image)
                            <a class="item-thumb"><img style="object-fit: cover; width:100%; height:100%;"
                                    src="{{ Storage::url($image->filename)}}" onclick="changeImage(this);"></a>
                            @endforeach
                        </div> <!-- thumbs-wrap.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <form action="{{route('add.to.cart', $product_detail->pro_slug)}}" method="GET" class="col-md-6 border-left">
                    @csrf
                    <article class="content-body">
                        <h2 class="title">{{$product_detail->pro_name}}</h2>
                        <div class="rating-wrap my-3">
                            <span class="badge badge-warning"> <i class="fa fa-star"></i> 3.8</span>
                            <small id="totalReviewProduct" class="label-rating text-muted">{{$totalReviewProduct}} reviews</small>
                            <small id="totalWishlishProduct" class="label-rating text-muted">{{$totalWishlishProduct}} wishlists</small>
                            <small id="totalOrderProduct" class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> {{$totalOrderProduct}} orders
                            </small>
                        </div> <!-- rating-wrap.// -->

                        <div class="mb-3">
                            <var class="price h4">{{number_format($product_detail->pro_price, 0, '', '.')}}</var>
                            <span class="text-muted"> VNĐ</span>
                        </div>

                        <p class="text-justify">
                            {{$product_detail->pro_description}}
                        </p>

                        <hr>
                        @if($product_detail->pro_quantity == 0)
                            <h4>Hết hàng</h4>
                        @else
                        <div class="row">
                            <div class="form-group col-md flex-grow-0">
                                <label>Quantity</label>
                                <div class="input-group mb-3 input-spinner">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-light qtyminus" field='quantity' type="button"
                                            id="button-minus"> - </button>
                                    </div>
                                    <input type="hidden" id="maxQuantity" value="{{ $product_detail->pro_quantity }}">
                                    <input type="text" min="1" style="max-width:60px; flex-basis: 6000000000px;" name='quantity'
                                        class="form-control" value="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-light qtyplus" field='quantity' type="button"
                                            id="button-plus"> + </button>
                                    </div>
                                </div>
                                <label>Còn {{$product_detail->pro_quantity}} sản phẩm</label>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <!-- <a href="#" class="btn  btn-primary"> Buy now </a> -->
                        <button class="btn btn-primary">Add to cart <i class="fas fa-shopping-cart"></i></button>
                        <!-- <a type="submit" class="btn btn-primary"> <span class="text">Add to cart</span> <i
                                class="fas fa-shopping-cart"></i> </a> -->
                        @if($checkWishlist)
                        <a href="{{route('user.wishlist.store', $product_detail->pro_id)}}" id="icon-wishlist" class="btn btn-danger"> 
                            <span style="">
                                <i class="fas fa-heart"></i>
                            </span>
                        </a>
                        @else
                        <a href="{{route('user.wishlist.store', $product_detail->pro_id)}}" id="icon-wishlist" class="btn btn-light"> 
                            <span style="">
                                <i class="fas fa-heart"></i>
                            </span>
                        </a>
                        @endif
                        @endif                        
                    </article> <!-- product-info-aside .// -->
                </form> <!-- col.// -->
            </div> <!-- row.// -->
        </div>
        <div class="row">
            <div class="col mx-auto">
                <header class="section-heading">
                    <div class="wrap">
                    <h3>Review</h3>
                    </div>
                    <div class="rating-wrap">
                        <ul class="rating-stars stars-lg">
                            <li style="width:80%" class="stars-active">
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/stars-active.svg"
                                    alt="">
                            </li>
                            <li>
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/starts-disable.svg"
                                    alt="">
                            </li>
                        </ul>
                        <strong class="label-rating text-lg"> 4.5 <span class="text-muted">| {{$totalReviewProduct}} reviews</span></strong>
                    </div>
                </header>

                <article class="box mb-3">
                    <div class="icontext w-100">
                        <img src="https://nguyen.dev/storage/img/34123114_235937487140188_8411538856163147776_n.jpg"
                            class="img-xs icon rounded-circle">
                        <div class="text">
                            <span class="date text-muted float-md-right">24.04.2020 </span>
                            <h6 class="mb-1">Nguyen</h6>
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/stars-active.svg"
                                        alt="">
                                </li>
                                <li>
                                    <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/starts-disable.svg"
                                        alt="">
                                </li>
                            </ul>
                            <span class="label-rating text-warning">Good</span>
                        </div>
                    </div> <!-- icontext.// -->
                    <div class="mt-3">
                        <p>
                            Chó xịn
                        </p>
                    </div>
                </article>
                <article class="box mb-3">
                    
                </article>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div><!-- container // -->


</section>
@endsection
@push('scripts')
<script>
function changeImage(imgs) {
    var expandImg = document.getElementById("thumbnailImg");
    thumbnailImg.src = imgs.src;
    thumbnailImg.parentElement.style.display = "block";
}

$('a#icon-wishlist').on('click', function(e) {
    e.preventDefault();
    let check = document.getElementById("auth").textContent;
    if(check === 'Welcome!') {
        window.location.href = "../login";
    }
    else
    {
        let $this = $(this);
        let url = $this.attr('href');

    if(url){
        $.ajax({
            menthod: 'GET',
            url: url,
        }).done(function(results){
            if (results['msg'] === 'success')
            {
                $this.removeClass('btn btn-light');
                $this.addClass('btn btn-danger');
                document.getElementById("wishlistTotal").textContent = results['total'];
                document.getElementById("totalWishlishProduct").textContent = results['totalWishlishProduct'] + ' wishlists';
            }
            else if (results['msg'] === 'delete')
            {
                $this.removeClass('btn btn-danger');
                $this.addClass('btn btn-light');
                document.getElementById("wishlistTotal").textContent = results['total'];
                document.getElementById("totalWishlishProduct").textContent = results['totalWishlishProduct'] + ' wishlists';
            }
        })
    }
    }
});

jQuery(document).ready(function() {
    // This button will increment the value
    $('.qtyplus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');

        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        var maxVal = parseInt($('input[id=' + 'maxQuantity' + ']').val());
        // If is not undefined
        if (!isNaN(currentVal) && currentVal < maxVal) {
            // Increment
            $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(maxVal);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 1) {
            // Decrement one
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(1);
        }
    });
});
</script>
@endpush