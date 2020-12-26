<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
</head>

<body>
    <nav class="nav" style="background-color: #4481eb; height: 30px;">
        <div class="header-menu flex-row">
            <div>
                <ul class="nav-items">
                    <li class="nav-contain">
                        <a href="#">Yêu thích</a>
                    </li>
                    <li class="nav-contain">
                        <a href="#">Đăng nhập</a>
                    </li>
                    <li class="nav-contain">
                        <a href="#">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="nav" style="padding:0 30px;">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Apple</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Mac</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">IPad</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Iphone</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Watch</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
    <main>

        <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Tours & Travels</h3>
                <h1>Amazing Place on Earth</h1>
                <button class="btn">Explore</button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->
        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/213032/iphone-12-pro-xanh-duong-new-600x600-600x600.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/213032/iphone-12-pro-xanh-duong-new-600x600-600x600.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/213032/iphone-12-pro-xanh-duong-new-600x600-600x600.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/213032/iphone-12-pro-xanh-duong-new-600x600-600x600.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>London Fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ----------x---------- Blog Carousel --------x-------- -->
    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>