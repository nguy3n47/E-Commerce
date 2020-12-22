<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/welcome.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('client/css/mdb.min.css') }}" />
    <!-- Custom styles -->
</head>



<body>
    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark  black nav-first">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img
                                    src="{{ asset('client/images/image_welcome/logoshop.png') }}" width="35" height="35"
                                    alt=""><b> Thế giới công nghệ</b></i>
                                </span>
                            </a>
                        </li>



                        <nav class="navbar navbar-dark ">
                            <form class="form-inline my-2 my-lg-0 ml-auto">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3"
                                    type="submit">Search</button>
                            </form>
                        </nav>
                        <li class="nav-item nav-bhx pt-2">
                            <a class="nav-link " href="#"><i class="fas fa-circle"></i>
                                <img src="{{ asset('client/images/image_welcome/logo-bhx.png') }}" width="100"
                                    height="15" alt="">
                                <b
                                    style="display:inline-block;vertical-align:middle;margin-left:2px;color:yellow; line-height:1.3">
                                    <span style="font-weight:normal;">giảm</span>
                                    " đến 50% +"
                                    <br>
                                    "5 lần Freeship"
                                </b>
                            </a>

                        </li>
                        <li class="nav-item mt-1">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lịch sử mua hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Game App</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark  light-blue accent-3">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-mobile-alt"></i> Điện thoại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-laptop"></i> Laptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-tablet-alt"></i> Máy tính bảng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-headphones-alt"></i> Phụ kiện</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-clock"></i> Đồng hồ thời trang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-desktop"></i> PC, Máy in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Máy cũ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sim, Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trả góp, Điện nước</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



    </header>
    <!--Main Layout-->
    <div class="container mt-3">

        <!-- Carousel wrapper -->


        <div class="row">
            <div class="col-8">
                <!-- Carousel wrapper -->
                <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark"
                    data-mdb-ride="carousel">


                    <!-- Inner -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel1.png') }}"
                                    alt="First slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel2.png') }}"
                                    alt="Second slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel3.png') }}"
                                    alt="Third slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel4.png') }}" alt="Four slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel5.png') }}" alt="Five slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel6.png') }}" alt="Six slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img class="d-block w-100"
                                    src="{{ asset('client/images/image_welcome/Carousel7.png') }}"
                                    alt="Seven slide"></a>
                        </div>
                    </div>
                    <!-- Inner -->

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselDarkVariant" role="button" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselDarkVariant" role="button" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>


            </div>
            <div class="col-4">
                <figure class="figure-24H_CN">
                    <h2>
                    </h2>
                </figure>
                <div>
                    <a href="#"><img width="100%"
                            src="{{ asset('client/images/image_welcome/24hCongNghe_files/M51-398-110-398x110-2.png') }}"
                            alt=""></a>
                    <a href="#"><img width="100%" class="mt-2"
                            src="{{ asset('client/images/image_welcome/24hCongNghe_files/398-110-398x110-2.png') }}"
                            alt=""></a>
                </div>
            </div>



        </div>

    </div>
    <!--Khuyen mai-->
    <div class="container mt-3">
        <!--image-->
        <div class="container m-0 p-0 mt-2">
            <a href="#"><img width="100%"
                    src="{{ asset('client/images/image_welcome/24hCongNghe_files/xa-kho-1200-75-1200x75.png') }}"
                    alt=""></a>
        </div>
        <!--image-->
        <div class="container m-0 p-0 mt-2">
            <a href="#"><img width="100%" src="{{ asset('client/images/image_welcome/24hCongNghe_files/km-hot.png') }}"
                    alt=""></a>
        </div>
        <!--SP khuyen mai-->
        <div class="container m-0 p-0 mt-2">

            <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <!--owl-wrapper-->
                            <div class="row mt-5 mb-5 owl-wrapper">
                                <!-- show products -->
                                @for($i = 0; $i < count($products); $i++) <div class="col ">
                                    <div class="ml-3">
                                        <label
                                            style="background-color:yellow; width: 45%; left: 0; border-radius:5px; padding-left:3px; padding:2px"><b>Trả
                                                góp 0%</b></label>
                                    </div>
                                    <a href="{{ url('/detail', $products[$i]->id) }}">
                                        <img height="180"
                                            src="{{ asset('client/images/image_welcome/24hCongNghe_files/iphone-12-trang-new-600x600-600x600..jpg') }}"
                                            class=" lazyloaded" alt="iPhone 12 128GB">
                                        <h3>{{ $products[$i]->pro_Name }}</h3>
                                        <div class="price">
                                            <strong>{{ $products[$i]->price }}₫</strong>
                                            <br>
                                            <span>Số lượng: {{ $products[$i]->quantity}}</span>
                                        </div>
                                    </a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    </div>

</body>

<!-- MDB -->
<script type="text/javascript" src="{{ asset('client/js/mdb.min.js') }}"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>