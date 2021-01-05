<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet" />

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

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('client/css/homePagecss/Style.css') }}">

</head>

<body>

    <!-- Top -->
    <div id="top">
        <div id="top-left">
            <ul>
                <li><a href="https://www.instagram.com/accounts/login/?hl=vi" target="_blank" class="fab fa-instagram"></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-square"></a></li>
                <li><a href="https://login.yahoo.com/?.intl=us&lang=vi-VN&.src=ym" target="_blank" class="fab fa-yahoo"></a></li>
                <li><a href="https://twitter.com/login?lang=vi" target="_blank" class="fab fa-twitter-square"></a>
                </li>
            </ul>
        </div>
        <div id="top-right">
            <ul>
                <li><i class="fas fa-sign-in-alt" style="color: #ffffff;"></i></li>
<<<<<<< HEAD
                <li class="An"><a href="file:///C:/Users/MyPC/Documents/Web/Login/LogIn.html" target="_blank"><b>Đăng
                            nhập</b></a></liclass="An">
                <li><i class="fas fa-user"></i></li>
=======
                <li class="An">|</li>
                <li class="An"><a href="{{ route('login') }}"><b>Đăng
                            nhập</b></a></li>
                <li class="An">|</li class="An">
>>>>>>> 154745039d97a87581aaf5b007a12253c4cf10fd
                <li class="An"><a href="file:///C:/Users/MyPC/Documents/Web/Login/Register.html" target="_blank"><b>Đăng
                            ký</b></a></li class="An">
            </ul>
        </div>
    </div>
    <!--End Top -->


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
                                            <img src="{{ asset('client/images/image_welcome/Untitled-1-removebg-preview.png')}}" alt="">
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
                                            <a href="{{route('getCart')}}"><i class="ion-android-cart"></i></a>

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

    <!--header ends -->

    <!-- Main -->
    <div class="home_black_version">
        <header class="header_area header_black">
            <!--slider section starts -->
            <div class="slider_area slider_black owl-carousel">
                <div class="single_slider" data-bgimg="{{ asset('client/images/image_welcome/slide1.jpg')}}">
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
                <div class="single_slider" data-bgimg="{{ asset('client/images/image_welcome/slide3.jpg')}}">
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
                <div class="single_slider" data-bgimg="{{ asset('client/images/image_welcome/slide2.jpg')}}">
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
            <!--slider section ends -->

        </header>

        <!--Products -->
        <main>

            <!-- Carousel -->
            <section>
                <div class="blog">
                    <div class="title" data-aos="zoom-in" data-aos-delay="200" style="margin-bottom: -100px;">
                        <h2>Sản Phẩm Bán Chạy Nhất</h2>
                    </div>
                    <div class="container" data-aos="zoom-in" data-aos-delay="200">
                        <div class="owl-carousel owl-theme blog-post">
                            @foreach($best_selling_products as $best_pro)
                            <a href="{{ url('/detail', str_replace(' ', '-', $best_pro->pro_Name))}}">
                                <div class="blog-content">
                                    <div class="blog-header">
                                        <img src="./images/pic1.jpg" alt="">
                                        <!-- like proc -->
                                        <ul class="icons">
                                            <span><i class="fas fa-heart"></i></span>
                                        </ul>
                                    </div>
                                    <div class="blog-title">
                                        <h3>{{ $best_pro->pro_Name }}</h3>
                                        <button class="btn btn-blog">{{ number_format($best_pro->price, 0,'','.') }}
                                            VND</button>
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

            <!--New Product -->
            <section class="section featured">
                <div class="title" data-aos="zoom-in" data-aos-delay="200">
                    <h2>Sản Phẩm Mới Nhất</h2>
                </div>

<<<<<<< HEAD
                <div class="product-center container" data-aos="fade-left" data-aos-delay="200">
=======
                <div class="product-center container" data-aos="zoom-in" data-aos-delay="200">
                    @foreach($newProducts as $new_pro)
>>>>>>> 154745039d97a87581aaf5b007a12253c4cf10fd
                    <div class="product">
                        <a href="{{ url('/detail', str_replace(' ', '-', $new_pro->pro_Name))}}">
                            <div class="product-header">
                                <img src="./images/pic5.jpg" alt="">

                                <ul class="icons">
                                    <span><i class="fas fa-heart"></i></span>
                                </ul>
                            </div>
                            <div class="product-footer">
                                <a href="#">
                                    <h3>{{ $new_pro->pro_Name }}</h3>
                                </a>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="price">{{ $new_pro->price }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- banner -->
            <section class="banner_fullwidth black_fullwidth" data-aos="fade-in" data-aos-delay="200">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="banner_text">
                                <p>Sale Off 20% All Products</p>
                                <h2>It’s treat yourself season.</h2>
                                <span>Get the newest iPhone for an unbelievable price.</span>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!-- banner end -->

             <!-- Love Product -->
            <section class="section featured">
                <div class="title" data-aos="zoom-in" data-aos-delay="200">
                    <h2>Sản Phẩm Yêu Thích</h2>
                </div>

<<<<<<< HEAD
                <div class="product-center container" data-aos="fade-right" data-aos-delay="200">
=======
                <div class="product-center container" data-aos="zoom-in" data-aos-delay="200">
                    @foreach($best_loving_products as $love_pro)
>>>>>>> 154745039d97a87581aaf5b007a12253c4cf10fd
                    <div class="product">
                        <div class="product-header">
                            <img src="./images/pic5.jpg" alt="">

                            <ul class="icons">
                                <span><i class="fas fa-heart"></i></span>
                            </ul>
                        </div>
                        <div class="product-footer">
                            <a href="#">
                                <h3>{{ $love_pro->pro_Name }}</h3>
                            </a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4 class="price">{{ $love_pro->price }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>

            </section>

        </main>
    </div> 
    <!-- End Main -->

    <!-- Product Page -->
    



    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Rjfjhh</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aperiam sed facilis eaque.
                    Exercitationem expedita nam aspernatur quia hic repudiandae illo tempora quos est ipsam voluptas
                    dolorem, distinctio nulla neque.</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Our Teams</h2>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="./assets/instagram/thumb-card4.png" alt="insta2">
                </div>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="./assets/instagram/thumb-card7.png" alt="insta5">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                <a href="#" target="_black">AECC Team</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->


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