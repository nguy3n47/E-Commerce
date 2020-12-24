<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/styleDetails.css') }}">
</head>

<body>
    <div class="card-wrapper" id="app">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img v-bind:src="getProduct.image" alt="">
                        <!--<img src="shoes_images/1.jpg" alt="shoe image">
            <img src="shoes_images/2.jpg" alt="shoe image">
            <img src="shoes_images/3.jpg" alt="shoe image">
            <img src="shoes_images/4.jpg" alt="shoe image">-->
                    </div>
                </div>
                <div class="img-select">
                    <div v-for="(item, index) in listProductDetail" v-bind:class="classActive(index)" v-bind:key="index" v-on:click="handleClickColor($event, index)">
                        <img v-bind:src="item.image" v-bind:alt="item.textColor">
                    </div>
                    <!--<div class="img-item">
            <a href="#" data-id="1">
              <img src="shoes_images/1.jpg" alt="shoe image">
            </a>
          </div>

          <div class="img-item">
            <a href="#" data-id="2">
              <img src="shoes_images/2.jpg" alt="shoe image">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="3">
              <img src="shoes_images/3.jpg" alt="shoe image">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="4">
              <img src="shoes_images/4.jpg" alt="shoe image">
            </a>
          </div>-->
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <div class="title">
                    <h2 class="product-title">{{ title }}
                        <!--Apple Watch-->
                    </h2>
                    <i class="fas fa-heart" style="font-size: 30px;margin: 1.4rem 0;"><sup id="items-added"></sup></i>
                </div>
                <a href="#" class="product-link">Series 6</a>
                <div class="infos">
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">
                        <h3>{{ formatFinalPrice }}</h3>
                        <h3>{{ formatOriginalPrice }}</h3>
                        <div class="sale-price">-{{sale * 100}}%</div>
                    </div>
                    <div id="more-infos">
                        <h5 class="choose">Giới thiệu</h5>
                        <h5 class="choose">Bảo hành</h5>
                    </div>
                    <div id="info-content">
                        <p class="paragraph" style="display: block;">{{ getProduct.listDesc1 }}</p>
                        <p class="paragraph" style="display: none;">{{ getProduct.listDesc2 }}</p>

                        <!--<p class="paragraph" style="display: block;">Apple Watch Series 6 44mm GPS Viền Nhôm Dây Cao Su
              Chính Hãng.</p>
            <p class="paragraph" style="display: none;">
              - Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá
              hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)
              </br>
              - Sau 30 ngày nhập lại máy theo giá thoả
              thuận</p>-->
                    </div>
                    <div class="choose-color">
                        <h4>Màu sắc:</h4>
                        <p>{{ getProduct.textColor }}</p>
                        <!--<button>Màu đen</button>
              <button>Màu trắng</button>
              <button>Màu hồng</button>-->
                    </div>
                    <p class="quantity" v-if="getProduct.quantity > 0">Còn lại: {{ getProduct.quantity }} Sản phẩm</p>
                    <p class="quantity" v-if="getProduct.quantity <= 0">Sản phẩm đã hết hàng</p>
                    <div class="quantity">
                        <h3>Số lượng</h3>
                        <input type="number" style="outline: none;" name="items" id="counter" min="1" value="1">
                    </div>
                    <div class="buttons">
                        <button id="add-to-cart"><i class="fas fa-shopping-cart" v-on:click="handleAddToCart"></i>THÊM VÀO GIỎ HÀNG</button>
                        <button v-on:click="handleAddToCart">MUA NGAY</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="{{ asset('client/js/scriptVue.js') }}"></script>
    <script src="{{ asset('client/js/product&profile.js') }}"></script>
</body>

</html>