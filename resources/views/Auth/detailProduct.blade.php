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
    <div class="card-wrapper">
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
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <div class="title">

                    <!-- Tên sp -->
                    <h2 class="product-title">Apple Watch</h2>

                    <!-- Icon iu thích -->
                    <i class="fas fa-heart" style="font-size: 30px;margin: 1.4rem 0;"><sup id="items-added"></sup></i>
                </div>
                <a href="#" class="product-link">Series 6</a>
                <div class="infos">

                    <!-- Đánh giá sp -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                    <!-- Giá sp -->
                    <div class="price">
                        <h3>11.000.00đ</h3>
                        <h3>13.990.000đ</h3>
                    </div>

                    <!-- Thông tin sp -->
                    <div id="more-infos">
                        <h5 class="choose">Giới thiệu</h5>
                        <h5 class="choose">Bảo hành</h5>
                    </div>

                    <div id="info-content">
                        <p class="paragraph" style="display: block;">Apple Watch Series 6 44mm GPS Viền Nhôm Dây Cao Su
                            Chính Hãng.</p>
                        <p class="paragraph" style="display: none;">
                            - Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá
                            hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)
                            </br>
                            - Sau 30 ngày nhập lại máy theo giá thoả
                            thuận</p>
                    </div>

                    <!-- Chọn màu sắc sp -->
                    <div class="choose-color">
                        <h4>Chọn màu</h4>
                        <div class="choose">
                            <button>Màu đen</button>
                            <button>Màu trắng</button>
                            <button>Màu hồng</button>
                        </div>
                    </div>

                    <!-- Số lượng sp -->
                    <div class="quantity">
                        <h3>Số lượng</h3>
                        <input type="number" style="outline: none;" name="items" id="counter" min="1" value="1">
                    </div>

                    <!-- Ý định mua sp -->
                    <div class="buttons">
                        <button id="add-to-cart"><i class="fas fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
                        <button>MUA NGAY</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="{{ asset('client/js/product&profile.js') }}"></script>
</body>

</html>