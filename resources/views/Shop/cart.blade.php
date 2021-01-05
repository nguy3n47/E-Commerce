<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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

.Form-edit {
    margin: 0px 50px 0px 50px;
}
</style>


<body>
    {{ csrf_field() }}
    <div class="container">
        <div id="order_sumary" class="container">
            @if (count($order_details) === 0)
            <div id="comback_homepage">
                <h1>Your Cart is Empty</h1>
                <a href="/">Trang chủ</a>
            </div>
            @else


            <div class="container">
                <H1>Giỏ hàng</H1>
                <div class="row">
                    <div class="col-8">
                        <!-- thông tin sản phẩm -->

                        @foreach($order_details as $order)
                        <div class="row" id="deleteItem_{{$order->id}}"
                            style="background-color:white; border-bottom:1px solid #dfdfdf; padding-bottom: 5px; padding-top:5px">
                            <!-- col 4 -->
                            <div class="col-4">
                                <div class="img-sp">
                                    <!-- hình sản phẩm -->
                                    <a href="#"><img src="{{ asset('client/images/product/4.jpg') }}" width="100%"
                                            alt=""></a>
                                    <br>
                                    <button type="submit" id="del" name="del" value="{{ $order->id }}"
                                        class="btn p-2"><i class="fas fa-trash-alt"></i> Xoá</i></button>
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
                                        <div class="choosenumber" style="width:150px">
                                            <!-- url -->
                                            <input type="hidden" id="url" name="url" value="{{ route('edit_cart') }}">
                                            <!-- product id -->
                                            <input type="hidden" id='product_id' name="product_id"
                                                value="{{ $order->product_id }}">
                                            <!-- price -->
                                            <input type="hidden" id="price" name="price" value="{{ $order->price }}">
                                            <!-- purchase id -->
                                            <input type="hidden" id="purchase_id" name="purchase_id"
                                                value="{{ $order->purchase_id }}">



                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="submit" id="sub" name="sub" value="{{ $order->id }}"
                                                    class="btn">-</button>
                                                <input type="number" style="outline: none; width: 50px;" id="counter"
                                                    min="1" value="{{ $order->quantity }}" readonly>
                                                <button type="submit" id="add" name="add" value="{{ $order->id }}"
                                                    class="btn">+</button>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col 8 -->
                        </div>


                        @endforeach

                    </div>
                    <!-- Right địa chỉ -->
                    <div class="col-3" style=" margin-left: 10px">

                        <div class="row" style="background-color:white ;padding-left: 10px; margin-bottom:10px">
                            <form class="m-0 mt-3">

                                <div class="row mb-4">
                                    <!-- column họ tên -->
                                    <div class="col">
                                        <div>
                                            <span>Địa chỉ đơn hàng</span>
                                            <button type="button"
                                                style="border:none; background-color:white !important; float:right;"
                                                data-mdb-toggle="modal" data-mdb-target="#exampleModal">Edit</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                                        <div class="row mb-4 Form-edit mt-5">
                                                            <div class="col" style="padding-left:0px">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="form3Example11">Full
                                                                        Name</label>
                                                                    <input type="text" id="form3Example11"
                                                                        value="{{ $customer[0]->lastname }} {{ $customer[0]->firstname }}"
                                                                        cl "ass=" form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Address input -->
                                                        <div class=" form-outline mb-4 Form-edit ">
                                                            <input type=" text " id=" form3Example4 " class="
                                                                        form-control " value="
                                                                        {{ $customer[0]->address }}" />
                                                                    <label class="form-label"
                                                                        for="form3Example4">Address</label>
                                                                </div>
                                                                <!-- sdt input -->
                                                                <div class="form-outline mb-4 Form-edit">
                                                                    <input type="tel" id="form3Example5"
                                                                        class="form-control"
                                                                        value="{{ $customer[0]->phone }}" />
                                                                    <label class="form-label" for="form3Example5">Số
                                                                        điện thoại</label>
                                                                </div>
                                                                <span id="spnPhoneStatus"></span>
                                                                <!-- Submit button -->
                                                                <p align="right" style="margin-right: 50px;">
                                                                    <button aria-label="Close" data-mdb-dismiss="modal"
                                                                        type="button" autocomplete="off"
                                                                        onclick="validateInformationCustomer()"
                                                                        class="btn btn-primary btn-block mb-4"
                                                                        style="width:20%;">Xác nhận</button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <span style="border-right:1px solid #dfdfdf; padding-right:10px;">Họ
                                                    tên</span>

                                                <!--<input type="text" id="form3Example1" class="form-control" value="{{ $customer[0]->lastname }} {{ $customer[0]->firstname }}" />-->
                                                <span style="padding-left: 10px">sdt</span>
                                                <!--<input type="tel" id="form3Example2" class="form-control" value="{{ $customer[0]->phone }}" />-->
                                                <br>
                                                <span>Địa chỉ</span>
                                                <!--<input type="text" id="form3Example3" class="form-control" value="{{ $customer[0]->address }}" />-->
                                            </div>
                                        </div>
                            </form>
                        </div>
                        <div class="row" style="background-color:white ;padding-left: 10px; margin-bottom:10px">
                            <!-- phương thức thanh toán -->
                            <div class="container m-0 p-0">
                                <span>PHƯƠNG THỨC THANH TOÁN</span>
                                <div>
                                    <input type="radio" id="payOneTime" name="payment" value="1" checked>
                                    <label for="payOneTime">Thanh toán khi nhận hàng</label>
                                    <br>
                                    <input type="radio" id="payOneTime1" name="payment" value="2">
                                    <label for="payOneTime1">Thanh toán card/thẻ ghi nợ</label>
                                </div>
                                <!-- <button class="btn btn-light" id="payOneTime" value="1"> Thanh toán khi nhận hàng</button>
                    <button class="btn btn-light" id="payOneTime" value="2" data-mdb-toggle="collapse"
                        href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Thanh toán card/thẻ ghi nợ</button> -->
                            </div>
                        </div>
                        <div class="row" style="background-color:white ;padding-left: 10px; margin-bottom:10px">
                            <!--  chốt đơn -->
                            <div class="container mt-3">
                                <div class="row" style="text-align:right">
                                    <div class="col">
                                        <span>Tổng thanh toán:</span>
                                    </div>
                                    <span class="totalSum" id="totalSum" value="{{ $order_details[0]->total }}"
                                        style="float:right">{{ $order_details[0]->total }}đ</span>

                                </div>

                                <!--  Chốt -->
                                <div class="row pb-5 mt-2" style="text-align:right">
                                    <p align="right">
                                        <input type="hidden" id="urlPay" name="urlPay"
                                            value="{{route('post_purchase')}}">
                                    </p>
                                </div>
                                <form action="{{route('post_purchase')}}" onsubmit="return validateForm()"
                                    method="post">
                                    @csrf
                                    <input type="hidden" id="pur_id" name="pur_id">
                                    <input type="hidden" id="name" name="name">
                                    <input type="hidden" id="phone" name="phone">
                                    <input type="hidden" id="adress" name="address">
                                    <input type="hidden" id="pay" name="pay">
                                    <div class="row">
                                        <input class="btn btn-danger btn-block" style="width: 100%;margin: 0; "
                                            type="submit" value="Đặt hàng">
                                        <!-- <button onclick="validateForm()" id="confirm_order" style="width: 200px" type="submit"
                        class="btn btn-danger btn-block">Đặt hàng</button> -->
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>



                </div>
                <!-- Tổng tiền -->
                <!-- <div class="container" style="  border-bottom:1px solid #dfdfdf;">
                <div class="row mt-2">
                    <div class="col">
                        <span><b>Tổng tiền:</b></span>
                        <span class="totalSum" id="totalSum" value="{{ $order_details[0]->total }}"
                            style="float:right">{{ $order_details[0]->total }}đ</span>
                    </div>
                </div>
            </div> -->


                @endif
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
<!-- Process back-end -->

<script src="{{ asset('client/js/testAj.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>