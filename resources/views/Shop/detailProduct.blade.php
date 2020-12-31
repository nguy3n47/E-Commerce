<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/styleDetails.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <div class="card-wrapper" id="app">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="{{ asset('client/images/product/1.jpg') }}" alt="shoe image">
                        <img src="{{ asset('client/images/product/2.jpg') }}" alt="shoe image">
                        <img src="{{ asset('client/images/product/3.jpg') }}" alt="shoe image">
                        <img src="{{ asset('client/images/product/4.jpg') }}" alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="{{ asset('client/images/product/1.jpg') }}" alt="shoe image">
                        </a>
                    </div>

                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="{{ asset('client/images/product/2.jpg') }}" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="{{ asset('client/images/product/3.jpg') }}" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="{{ asset('client/images/product/4.jpg') }}" alt="shoe image">
                        </a>
                    </div>-
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <div class="title">
                    <!--Tên-->
                    <h1 class="product-title">
                        {{ $product->pro_Name}}
                    </h1>
                    <i class="far fa-heart" style="font-size: 30px;margin: 1.4rem 0;"><sup id="items-added"></sup></i>
                </div>
                <a href="#" class="product-link">{{ $product->sku}}</a>
                <div class="infos">
                    <!--Đánh giá-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                    <!--Giá sp-->
                    <div class="price">
                        <h3>{{ $product->price }}<span>₫</span></h3>
                    </div>
                    <div id="more-infos">
                        <h5 class="choose">Giới thiệu</h5>
                        <h5 class="choose">Bảo hành</h5>
                    </div>

                    <!--Giới thiệu sp-->
                    <div id="info-content">
                        <p class="paragraph" style="display: block;">{{ $product->description }}</p>
                        <p class="paragraph" style="display: none;">
                            - Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá
                            hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)
                            </br>
                            - Sau 30 ngày nhập lại máy theo giá thoả
                            thuận</p>
                    </div>

                    <!--Màu sắc-->
                    <div class="choose-color">
                        <h4><b>Màu sắc</b></h4>
                        <div>
                            <button>Màu đen</button>
                            <button>Màu trắng</button>
                            <button>Màu hồng</button>
                        </div>
                    </div>

                    <!--Số lượng-->
                    <div class="quantity">
                        <h4><b>Số lượng</b></h4>
                        <input type="hidden" id="amountOfProduct" value="{{ $product->quantity }}">
                        <input type="number" style="outline: none;" name="items" id="counter" min="1" value="1">
                    </div>
                    <div class="quantity">
                        <p><b>Còn lại {{ $product->quantity }} sản phẩm</b></p>
                    </div>
                    <!--Mua hàng-->
                    <div class="buttons">
                        <button id="add-to-cart"><i class="fas fa-shopping-cart"></i>THÊM VÀO GIỎ
                            HÀNG</button>
                        <form action="{{route('postCart')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_name" value="{{ $product->pro_Name}}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="quantity" id="qti">
                            <button id="btn" type="submit" onclick="getQuantity()">MUA NGAY</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ĐÁNH GIÁ CỦA KHÁCH HÀNG-->
    <div class="container">
        <h2>Khách hàng nhận xét</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="rating-block">
                    <h4>Average user rating</h4>
                    <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </div>
            </div>
            <div class="col-sm-5">
                <h4>Rating breakdown</h4>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
                                aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">1</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
                                aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">1</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
                                aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">0</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                                aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">0</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                                aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">0</div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <hr />
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016<br />1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </div>
                            <div class="review-block-title">
                                <p>this was nice in buy</p>
                            </div>
                            <div class="review-block-description">
                                <p>this was nice in buy. this was nice in buy. this was nice in buy.
                                    this was nice in buy this was nice in buy this was nice in buy this was nice in buy
                                    this was nice in
                                    buy</p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016<br />1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </div>
                            <div class="review-block-title">
                                <p>this was nice in buy</p>
                            </div>
                            <div class="review-block-description">
                                <p>this was nice in buy. this was nice in buy. this was nice in buy.
                                    this was nice in buy this was nice in buy this was nice in buy this was nice in buy
                                    this was nice in
                                    buy</p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016<br />1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </div>
                            <div class="review-block-title">
                                <p>this was nice in buy</p>
                            </div>
                            <div class="review-block-description">
                                <p>this was nice in buy. this was nice in buy. this was nice in buy.
                                    this was nice in buy this was nice in buy this was nice in buy this was nice in buy
                                    this was nice in
                                    buy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Script -->
    <script src="{{ asset('client/js/product&profile.js') }}"></script>

    <!-- Process back-end -->
    <script src="{{ asset('client/js/detailToCart.js') }}"></script>
</body>

</html>