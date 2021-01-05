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
</style>

<body>
    <!-- 1 đơn hàng -->
    @if(count($list_purchase) == 0)
    <div>
        <h1>Chưa có đơn hàng</h1>
        <a href="/">Trang chủ</a>
    </div>
    @else
    @foreach($list_purchase as $pur)
    <div class="container" style="background-color:white; width:60%">
        <div class="container pb-3" style="border-bottom:1px solid #dfdfdf;">
            <span>Placed on </span> <span>{{ $pur[0]->create_at }}</span>
        </div>
        <div class="col-2">
            <span style="background-color: #dfdfdf ; border-radius:12px; padding:5px">{{$pur[0]->content}}</span>
        </div>
        <!-- 1 sp -->
        @foreach($pur as $p)
        <div class="container pt-3 pb-3">
            <!-- img & info đơn hàng -->
            <div class="row pb-3">
                <div class="col-2">
                    <a href="#">
                        <img src="{{ asset('/client/images/product/1.jpg') }}" width="100%" alt="">
                    </a>
                </div>
                <div class="col-3">
                    <span style="word-wrap: break-word;">{{$p->pro_Name}}</span>

                </div>
                <div class="col-2">
                    <span style="font-weight:300; opacity:0.6">Số lượng: </span> <span>{{$p->quantity}}</span>
                </div>
                <div class="col-2">
                    <span style="background-color: #dfdfdf ; border-radius:12px; padding:5px">{{$p->price}}đ</span>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container pb-3">
            <span>Tổng tiền: </span> <span>{{ $pur[0]->total }}đ</span>
        </div>
        <p></p>
    </div>
    @endforeach
    @endif
    <!-- 1 đơn hàng -->
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>