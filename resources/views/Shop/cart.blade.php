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
        <!-- thông tin sản phẩm -->
        <div class="container pb-3 pt-3" style="width: 45%; background-color:white; border-bottom:1px solid #dfdfdf;">
            <div class="row">
                <!-- col 4 -->
                <div class="col-4">
                    <div class="img-sp">
                        <!-- hình sản phẩm -->
                        <a href="#"><img src="../../public/client/images/product/4.jpg" width="100%" alt=""></a>
                        <br>
                        <!-- button xóa sản phẩm -->
                        <button type="button" class="btn p-2"><i class="fas fa-trash-alt mr-2"></i> Xoá</i></button>
                    </div>
                </div>
                <!-- col 4 -->

                <!-- col 8 -->
                <div class="col-8">
                    <div class="row">
                        <div class="info-product">
                            <a href="#"> Điện thoại iPhone 11 Pro Max 512GB </a>
                            <span> 24.990.000₫ </span>
                        </div>
                        <!-- màu sp -->
                        <div class="color-product">
                            <div class="dropdown choose-color">
                                <span>Màu:</span> <span> Xanh</span>
                            </div>
                            <div class="choosenumber">
                                <div class="minus">
                                    <i class="fas fa-minus"></i>
                                </div>
                                <div class="number">
                                    1
                                </div>
                                <div class="plus">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 8 -->
            </div>

        </div>
        <!-- Tổng tiền -->
        <div class="container" style="width: 45%; background-color:white; ;">
            <!-- tổng tiền -->
            <div class="row" style="border-top: 1px solid  #dfdfdf">
                <div class="col">
                    <span>Số lượng:( </span> <span>2</span> <span>sản phẩm)</span>
                    <span style="float:right">151561531đ</span>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <span><b>Tổng tiền:</b></span>
                    <span style="float:right">151561531đ</span>
                </div>
            </div>
        </div>



    </div>
    </div>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>