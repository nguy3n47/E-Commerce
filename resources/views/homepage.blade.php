<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="{{ asset('client/css/homePagecss/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/homePagecss/owl.theme.default.min.css') }}">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="{{ asset('client/css/homePagecss/aos.css') }}">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="{{ asset('client/css/homePagecss/Style.css') }}">

</head>

<body>
    <div id="top">
        <div id="top-left">
            <ul>
                <li><a href="https://www.instagram.com/accounts/login/?hl=vi" target="_blank"
                        class="fab fa-instagram"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-square"></a></li>
                <li><a href="https://login.yahoo.com/?.intl=us&lang=vi-VN&.src=ym" target="_blank"
                        class="fab fa-yahoo"></a></li>
                <li><a href="https://twitter.com/login?lang=vi" target="_blank" class="fab fa-twitter-square"></a>
                </li>
            </ul>
        </div>
        <div id="top-right">
            <ul>
                <li><i class="fas fa-sign-in-alt" style="color: #ffffff;"></i></li>
                <li class="An">|</li>
                <li class="An"><a href="file:///C:/Users/MyPC/Documents/Web/Login/LogIn.html" target="_blank"><b>Đăng
                            nhập</b></a></liclass="An">
                <li class="An">|</li class="An">
                <li class="An"><a href="file:///C:/Users/MyPC/Documents/Web/Login/Register.html" target="_blank"><b>Đăng
                            ký</b></a></li class="An">
            </ul>
        </div>
    </div>
    <!-- End Top -->


    <!-- header starts -->

    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <div class="contact_icone" style="cursor: pointer;">
                                            <img src="./img/Untitled-1-removebg-preview.png" alt="">
                                        </div>
                                    </li>
                                    <li><a href="#">Mac</i></a></li>
                                    <li><a href="#">iPad</a></li>
                                    <li><a href="#">iPhone</i></a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li>
                                        <div class="search_btn">
                                            <a href="#"><i class="ion-ios-search-strong"></i></a>
                                            <div class="dropdown_search">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Product ....">
                                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wishlist_btn">
                                            <a href="#"><i class="ion-heart"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_link">
                                            <a href="#"><i class="ion-android-cart"></i></a>
                                            <span class="cart_quantity">2</span>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header ends -->
    <div class="home_black_version">
        <header class="header_area header_black">
            <!-- slider section starts -->
            <div class="slider_area slider_black owl-carousel">
                <div class="single_slider" data-bgimg="./img/slide1.jpg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="slider_content">
                                    <p>Blows other phones out of the water</p>
                                    <h1>IPhone 12 Pro</h1>
                                    <span>Bốn lần hoàn thiện</span>
                                    <p class="slider_price">starting at <span>30.450.000đ</span></p>
                                    <a href="#" class="button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single_slider" data-bgimg="./img/slide3.jpg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="slider_content">
                                    <p>New </p>
                                    <h1>MacBook Air 2020</h1>
                                    <span>Power. It’s in the Air.</span>
                                    <p class="slider_price">starting at <span>27.990.000đ</span></p>
                                    <a href="#" class="button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single_slider" data-bgimg="./img/slide2.jpg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="slider_content">
                                    <p>Super Retina XDR display</p>
                                    <h1>IPhone 11 Pro</h1>
                                    <span>3 camera system is upgraded.</span>
                                    <p class="slider_price">starting at <span>25.790.000đ</span></p>
                                    <a href="#" class="button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- slider section ends -->

        </header>

        <!-- Products -->
        <main>

            <!-- Carousel -->
            <section>
                <div class="blog">
                    <div class="title" style="margin-bottom: -100px;">
                        <h2>Sản Phẩm Bán Chạy Nhất</h2>
                    </div>
                    <div class="container">
                        <div class="owl-carousel owl-theme blog-post">
                            @foreach($products as $pro)
                            <a href="{{ url('/', str_replace(' ', '-', $pro->pro_Name))}}">
                                <div class="blog-content">
                                <div class="blog-header">
                                        <img src="./images/pic1.jpg" alt="">
                                        <ul class="icons">
                                            <span><i class="fas fa-heart"></i></span>
                                        </ul>
                                    </div>
                                    <div class="blog-title">
                                        <h3>{{ $pro->pro_Name }}</h3>
                                        <button class="btn btn-blog">Giá</button>
                                        <span>Learn more</span>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="owl-navigation">
                            <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                            <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gird Product -->
            <section class="section featured">
                <div class="title">
                    <h2>Sản Phẩm Mới Nhất</h2>
                </div>

                <div class="product-center container">
                    <div class="product">
                        <div class="product-header">
                            <img src="./images/pic5.jpg" alt="">

                            <ul class="icons">
                                <span><i class="fas fa-heart"></i></span>
                            </ul>
                        </div>
                        <div class="product-footer">
                            <a href="#">
                                <h3>Tên SP</h3>
                            </a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4 class="price">giá</h4>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section featured">
                <div class="title">
                    <h2>Sản Phẩm Yêu Thích</h2>
                </div>

                <div class="product-center container">
                    <div class="product">
                        <div class="product-header">
                            <img src="./images/pic5.jpg" alt="">

                            <ul class="icons">
                                <span><i class="fas fa-heart"></i></span>
                            </ul>
                        </div>
                        <div class="product-footer">
                            <a href="#">
                                <h3>Tên SP</h3>
                            </a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4 class="price">giá</h4>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Jquery Library file -->
    <script src="{{ asset('client/js/homePagejs/Jquery3.4.1.min.js') }}"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="{{ asset('client/js/homePagejs/owl.carousel.min.js') }}"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="{{ asset('client/js/homePagejs/aos.js') }}"></script>

    <!-- Custom Javascript file -->
    <script src="{{ asset('client/js/homePagejs/main.js') }}"></script>
    <script src="{{ asset('client/js/homePagejs/sp.js') }}"></script>
</body>

</html>