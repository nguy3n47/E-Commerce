<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
</head>

<style>
body {
    background-color: #EEEEEE;
}

.img-sp button {
    margin-top: 5px !important;
}

.info-product a {
    color: black;
}

.info-product span {
    float: right;
    right: 100%;
}

.color-product {
    margin-top: 30px;
    margin-bottom: 10px;
}

.choose-color {
    display: inline;
}

.choosenumber {
    float: right;
    overflow: hidden;
    position: relative;
    width: 100px;
    border: 1px solid #dfdfdf;
    background: #fff;
    border-radius: 3px;
    line-height: 30px;
    font-size: 14px;
    color: #333;
}

.minus {
    float: left;
    border-right: 1px solid #dfdfdf;
    background: #fff;
    width: 30%;
    height: 30px;
    position: relative;
    cursor: pointer;
    text-align: center;
}

.number {
    font-size: 14px;
    color: #333;
    float: left;
    width: 30%;
    height: 30px;
    text-align: center;
}

.plus {
    float: right;
    border-left: 1px solid #dfdfdf;
    background: #fff;
    width: 30%;
    height: 30px;
    position: relative;
    cursor: pointer;
    text-align: center;
}
</style>


<body>


    <div class="container">
        <div class="container" style="width:50% ;background-color:white; ">
            @if (count($order_details) === 0)
            <p>Giỏ hàng trống</p>
            @else
            <!-- thông tin sản phẩm -->
            <div class="container pb-3 pt-3" style=" border-bottom:1px solid #dfdfdf;">
                @foreach($order_details as $order)
                <div class="row">
                    <!-- col 4 -->
                    <div class="col-4">
                        <div class="img-sp">
                            <!-- hình sản phẩm -->
                            <a href="#"><img src="{{ asset('client/images/product/4.jpg') }}" width="100%" alt=""></a>
                            <br>
                            <!-- button xóa sản phẩm -->
                            <form action="{{route('postCart')}}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $order->product_id }}">
                                <input type="hidden" name="product_name" value="{{ $order->pro_Name }}">
                                <input type="hidden" name="quantity" value="{{ $order->quantity }}">
                                <input type="hidden" name="price" value="{{ $order->price }}">
                                <input type="hidden" name="total" value="{{ $order_details[0]->total }}">
                                <button type="submit" id="del" name="del" value="{{ $order->id }}" class="btn p-2"><i
                                        class="fas fa-trash-alt mr-2"></i> Xoá</i></button>
                            </form>
                        </div>
                    </div>
                    <!-- col 4 -->

                    <!-- col 8 -->
                    <div class="col-8">
                        <div class="row">
                            <div class="info-product">
                                <a href="#"> {{ $order->pro_Name }} </a>
                                <span> {{ $order->price }}đ </span>
                            </div>
                            <!-- màu sp -->
                            <div class="color-product">
                                <div class="dropdown choose-color">
                                    <span>Màu:</span> <span> Xanh</span>
                                </div>
                                <div class="choosenumber">
                                    <form action="{{route('postCart')}}" method="post">
                                        @csrf
                                        <input type="hidden" id="amountOfProduct" name="qtyMax"
                                            value="{{ $order->qtyMax }}">
                                        <input type="hidden" name="product_name" value="{{ $order->pro_Name }}">
                                        <input type="hidden" name="price" value="{{ $order->price }}">
                                        <input type="hidden" name="purchase_id" value="{{ $order->purchase_id }}">
                                        <input type="hidden" name="total" value="{{ $order_details[0]->total }}">
                                        <!-- sub quantity -->
                                        <button type="submit" id="sub" name="sub" value="{{ $order->id }}"
                                            class="btn">-</button>
                                        <input type="number" style="outline: none;" name="quantity" id="counter" min="1"
                                            value="{{ $order->quantity }}">

                                        <!-- add quantity -->
                                        <button type="submit" id="add" name="add" value="{{ $order->id }}"
                                            class="btn">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col 8 -->
                </div>
                @endforeach
            </div>
            <!-- Tổng tiền -->
            <div class="container" style="  border-bottom:1px solid #dfdfdf;">
                <!-- tổng tiền -->
                <div class="row" style="border-top: 1px solid  #dfdfdf">
                    <div class="col">
                        <span>Số lượng:( </span> <span>2</span> <span>sản phẩm)</span>
                        <span style="float:right">{{ $order_details[0]->total }}đ</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <span><b>Tổng tiền:</b></span>
                        <span style="float:right">{{ $order_details[0]->total }}đ</span>
                    </div>
                </div>
            </div>
            <!-- Thông tin khách hàng -->
            <div class="container mt-3">
                <h5>THÔNG TIN KHÁCH HÀNG:
                </h5>
                <!-- ridio check -->
                <div class="form-check form-check-inline m-2">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1" />
                    <label class="form-check-label" for="inlineRadio1">Anh</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2" />
                    <label class="form-check-label" for="inlineRadio2">Chị</label>
                </div>

                <!-- 2 column họ tên sdt -->
                <form class="m-0">

                    <div class="row mb-4">
                        <!-- column họ tên -->
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" />
                                <label class="form-label" for="form3Example1">Họ tên</label>
                            </div>
                        </div>
                        <!--  column  sdt -->
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example2" class="form-control" />
                                <label class="form-label" for="form3Example2">Số điện thoại</label>
                            </div>
                        </div>
                    </div>
                </form>
                <h5>ĐỊA CHỈ</h5>
                <form class="m-0">

                    <div class="row mb-4">
                        <!-- column họ tên -->
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Địa chỉ</label>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- phương thức thanh toán -->
                <div class="container m-0 p-0">
                    <h5>PHƯƠNG THỨC THANH TOÁN</h5>
                    <button class="btn btn-light"> Thanh toán khi nhận hàng</button>
                    <button class="btn btn-light" data-mdb-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample"> Thanh toán card/thẻ ghi nợ</button>
                    <!-- Collapsed content -->
                    <div class="collapse mt-3" id="collapseExample">
                        <div class="container">
                            <a href="#"><img src="{{ asset('client/images/card/ic_CIMB@4x.png') }}" width="48%"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('client/images/card/ic_MSB@4x.png') }}" width="48%"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('client/images/card/ic_sacombank@4x.png') }}" width="48%"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('client/images/card/ic_Vietcombank@4x.png') }}" width="48%"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <!--  chốt đơn -->
                <div class="container mt-3">
                    <div class="row " style="text-align:right">
                        <div class="col">
                            <span>Tổng tiền hàng</span>
                        </div>
                        <div class="col-3">
                            <span>151515151</span>
                        </div>
                    </div>
                    <div class="row" style="text-align:right">
                        <div class="col">
                            <span>Phí vận chuyển</span>
                        </div>
                        <div class="col-3">
                            <span>151515151</span>
                        </div>

                    </div>
                    <div class="row" style="text-align:right">
                        <div class="col">
                            <span>Tổng thanh toán:</span>
                        </div>
                        <div class="col-3">
                            <span>151515151</span>
                        </div>

                    </div>
                    <!--  Chốt -->
                    <div class="row pb-5 mt-2" style="text-align:right">
                        <p align="right">
                            <button style="width: 200px" type="submit" class="btn btn-danger btn-block">Đặt
                                hàng</button>
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>


    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
<!-- Process back-end -->
<script src="{{ asset('client/js/detailToCart.js') }}"></script>

</html>