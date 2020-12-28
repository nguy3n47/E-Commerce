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

    <!-- header middle starts -->
    <div class="header_middel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="home_contact">
                        <div class="contact_icone" style="cursor: pointer;">
                            <img src=".img/Untitled-1.jpg" alt="">
                        </div>
                        <div class="contact_box">
                            <p>Hotline : <a href="tel: 1234567894">1234567894</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <h1>APPLE</h1>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7 col-6">
                    <div class="middel_right">
                        <div class="search_btn">
                            <a href="#"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="#">
                                    <input type="text" placeholder="Search Product ....">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="wishlist_btn">
                            <a href="#"><i class="ion-heart"></i></a>
                        </div>
                        <div class="cart_link">
                            <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">Rs.
                                    67,598</span><i class="ion-chevron-down"></i></a>
                            <span class="cart_quantity">2</span>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header middle ends -->

    <!-- header bottom starts -->

    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="logo_sticky">
                            <a href="#">
                                <h2>APPLE</h2>
                            </a>
                        </div>
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="#">Home <i class="ion-chevron-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="#">Banner</a></li>
                                            <li><a href="#">Featured</a></li>
                                            <li><a href="#">Collection</a></li>
                                            <li><a href="#">Best Selling</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Category <i class="ion-chevron-down"></i></a>
                                        <ul class="mega_menu">
                                            <li>
                                                <a href="#">Women</a>
                                                <ul>
                                                    <li><a href="#">Earring</a></li>
                                                    <li><a href="#">Pendant</a></li>
                                                    <li><a href="#">Rings</a></li>
                                                    <li><a href="#">Chain</a></li>
                                                    <li><a href="#">Bangles</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Men</a>
                                                <ul>
                                                    <li><a href="#">Ring</a></li>
                                                    <li><a href="#">Pendant</a></li>
                                                    <li><a href="#">Bracelet</a></li>
                                                    <li><a href="#">Chain</a></li>
                                                    <li><a href="#">Gemstone</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Other</a>
                                                <ul>
                                                    <li><a href="#">Platinium</a></li>
                                                    <li><a href="#">Silver</a></li>
                                                    <li><a href="#">Coins</a></li>
                                                    <li><a href="#">Gift Card</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Uncut Diamonds <i class="ion-chevron-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#">Earrings</a></li>
                                            <li><a href="#">Pendant</a></li>
                                            <li><a href="#">Ring</a></li>
                                            <li><a href="#">Bracelet</a></li>
                                            <li><a href="#">Necklace Set</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li>
                                        <a href="#">Special Collection <i class="ion-chevron-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#">Gemstone</a></li>
                                            <li><a href="#">Gold</a></li>
                                            <li><a href="#">Rose Gold</a></li>
                                            <li><a href="#">Silver</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom ends -->
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
                                    <img src="./assets/Blog-post/post-1.jpg" alt="post-1">
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
                                <span><i class="fas fa-shopping-bag"></i></span>
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
                    <h1>Latest Products</h1>
                </div>

                <div class="product-center container">
                    <div class="product">
                        <div class="product-header">
                            <img src="./images/pic5.jpg" alt="">

                            <ul class="icons">
                                <span><i class="bx bx-heart"></i></span>
                                <span><i class="bx bx-shopping-bag"></i></span>
                                <span><i class="bx bx-search"></i></span>
                            </ul>
                        </div>
                        <div class="product-footer">
                            <a href="#">
                                <h3>Boy’s T-Shirt</h3>
                            </a>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <h4 class="price">$50</h4>
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