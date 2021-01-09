@extends('frontend.layouts.master')
@section('title','E-Shop || Products')
@section('main-content')

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">All Products</h2>
        <nav>
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Product type</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">
                                <form class="pb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-light" type="button"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="list-menu">
                                @foreach($categories as $category)
                                    <li><a href="#">{{$category->c_name}}</a></li>
                                @endforeach
                                </ul>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Price range </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3" style="">
                            <div class="card-body">
                                <input type="range" class="custom-range" min="0" max="100" name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="1.000.000" type="number">
                                    </div>
                                </div> <!-- form-row.// -->
                                <button class="btn btn-block btn-primary">Apply</button>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                </div> <!-- card.// -->

            </aside> <!-- col.// -->
            <main class="col-md-9">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto">{{ $products->count() }} Items </span>
                        <select class="mr-2 form-control">
                            <option>Latest items</option>
                            <option>Trending</option>
                            <option>Most Popular</option>
                            <option>Cheapest</option>
                        </select>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                                <i class="fa fa-bars"></i></a>
                            <a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip"
                                title="Grid view">
                                <i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </header><!-- sect-heading -->

                <div class="row">
                    @foreach($products as $product)
                    <a href="{{ route('product.detail', $product->pro_slug) }}">
                        <div class="col-md-4">
                            <figure class="card card-product-grid" >
                                <div class="img-wrap">
                                    <!-- <span class="badge badge-danger"> NEW </span> -->
                                    <img src="{{ Storage::url($product->pro_thumbnail)}}">
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="" style="height: 110px">
                                        <a href="{{ route('product.detail', $product->pro_slug) }}"
                                            class="title">{{$product->pro_name}}</a>
                                        <div class="rating-wrap">
                                            <ul class="rating-stars">
                                                <li style="width:100%" class="stars-active">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="label-rating text-muted"> 0 reviews</span>

                                        </div>
                                        <div class="price-wrap mt-2">
                                            <span class="price">{{number_format($product->pro_price, 0, '', '.')}} VNĐ</span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <a href="{{route('add.to.cart', $product->pro_slug)}}" class="btn btn-block btn-primary">Add to cart </a>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                    @endforeach
                </div>

                <nav class="mt-4" aria-label="Page navigation sample">
                    @if($products->hasPages())
                    <ul class="pagination">
                        @if ($products->onFirstPage())
                            <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}">Prev</a></li>
                        @endif

                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                            <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }} page-item">
                                <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($products->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a></li>
                        @else
                            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                        @endif
                    </ul>
                @endif
                </nav>

            </main> <!-- col.// -->
        </div>
    </div> <!-- container .//  -->
</section>

@endsection
@push('scripts')

@endpush