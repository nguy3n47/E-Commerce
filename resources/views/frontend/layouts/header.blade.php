<header class="section-header">
    <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
        <div class="container">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">E-Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link"> Call: +999999999</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link"> English </a>
                </li>
            </ul> <!-- list-inline //  -->
        </div> <!-- navbar-collapse .// -->
        </div> <!-- container //  -->
    </nav> <!-- header-top-light.// -->

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a href="{{route('home')}}" class="brand-wrap">
                        <img class="logo" src="{{asset('frontend/images/images-logo.png')}}">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-12 col-sm-12">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <input type="text" style="width: 500px" class="form-control search-input" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                        @php
                            if(Auth::check())
                            {
                                $countWishlist=DB::table('wishlists')->where('user_id', Auth::user()->id)->count();
                            }
                            else
                            {
                                $countWishlist=0;
                            }
                        @endphp
                            <a href="{{route('user.wishlist.show')}}" class="icon icon-sm rounded-circle border">
                                <i class="fa fa-heart"></i></a>
                            <span id="wishlistTotal" class="badge badge-pill badge-danger notify">{{$countWishlist}}</span>
                        </div>
                        <div class="widget-header  mr-3">
                            <a href="{{route('cart')}}" class="icon icon-sm rounded-circle border">
                                <i class="fa fa-shopping-cart"></i></a>
                            <span id="cartTotal" class="badge badge-pill badge-danger notify">{{Cart::count()}}</span>
                        </div>
                        <div class="widget-header icontext">
                            @if(session()->has('currentUser'))
                                <div class="widget dropdown d-inline-block">
                                    <a href="#" class="icontext mr-4 dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img style="object-fit: cover;" class="icon icon-sm rounded-circle"
                                            src="{{ Storage::url(Auth::user()->avatar)}}">
                                        <div id="auth" class="text">
                                            {{Auth::user()->name}}
                                        </div>
                                    </a> <!-- iconbox // -->
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">
                                        <a class="dropdown-item" href="{{route('user.profile')}}">My profile</a>
                                        <a class="dropdown-item" href="{{route('user.orders')}}">Orders</a>
                                        <a class="dropdown-item" href="{{route('user.changePassword.form')}}">Change password</a>
                                        <a class="dropdown-item" href="{{route('logout.submit')}}">Log out</a>
                                    </div>
                                </div>
                            @else
                                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                <div class="text">
                                    <span id="auth" class="text-muted">Welcome!</span>
                                    <div>
                                        <a href="{{route('login')}}"> Sign in</a> |
                                        <a href="{{route('register')}}"> Register</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->
@include('frontend.layouts.nav')