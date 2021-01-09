@extends('frontend.layouts.master')
@section('title', 'E-Shop || Shopping Cart')
@section('main-content')
<section class="section-pagetop bg">
    {{ csrf_field() }}
    <div class="container">
        <h2 class="title-page">Shopping Cart</h2>
    </div> <!-- container //  -->
</section>

@if(Cart::count() > 0)
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-9">
                <div class="card">

                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="160">Price</th>
                                <th scope="col" class="text-right" width="130"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $row)
                            <tr>
                                <td class="align-middle">
                                    <figure class="itemside">
                                        <div class="aside"><img
                                                src="{{ Storage::url($row->options['photo'])}}"
                                                class="border img-sm"></div>
                                        <figcaption class="info align-self-center">
                                            <a href="#" class="title">{{$row->name}}</a>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td class="align-middle">
                                    <input href="{{route('update.to.cart', $row->rowId)}}" data-id-product="{{$row->id}}" type="number" name="qty" class="form-control text-center" min="1" max="{{$row->options['maxQuantity']}}" value={{$row->qty}}></input>
                                </td>
                                <td class="align-middle">
                                    <p id="amount-{{$row->id}}" class="price">{{number_format($row->price * $row->qty, 0, '', '.')}} ₫</p>
                                </td>
                                <td class="align-middle">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light"> <i class="fa fa-heart"></i></a>
                                    <a href="{{route('delete.to.cart', $row->rowId)}}" class="btn btn-light" > <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-body border-top">
                        <a href="{{route('checkout')}}" class="btn btn-primary float-md-right"> Check out <i
                                class="fa fa-chevron-right"></i> </a>
                        <a href="#" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
                    </div>
                </div> <!-- card.// -->

                <div class="alert alert-success mt-3">
                    <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
                </div>

            </main> <!-- col.// -->
            <aside class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd style="width: 100%" id="totalSum" class="text-right h5"><strong>{{Cart::subtotal(0,'.','.')}} ₫</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png"
                                height="26">
                            <img src="https://laz-img-cdn.alicdn.com/tfs/TB10rN4lnM11u4jSZPxXXahcXXa-1024-1024.png"
                                height="26">
                            <img src="https://laz-img-cdn.alicdn.com/tfs/O1CN0174CwSq2NjastWFX1u_!!19999999999999-2-tps.png"
                                height="26">
                            <img src="https://airpay.in.th/app/faq/image/logo-airpay-footer.png" height="26">
                        </p>

                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->
            </aside> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
@else
<div class="container text-center">
    <image class="img-fluid" width="60%" src="https://www.thesmokeyvapes.com/assets/front/images/empty-cart.png"></image>
</div>
@endif
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
    $(":input").bind('keyup mouseup', function () {
        let $this = $(this);
        let url = $this.attr('href');
        let qty = $this.val();
        let product_id = $this.attr('data-id-product');

        if(url){
        $.ajax({
            menthod: 'GET',
            url: url,
            data: { 
                qty: qty,
                product_id: product_id
            }
        }).done(function( results ){
            let id = 'amount-' + results['id'];
            document.getElementById("totalSum").textContent = results['subtotal'] + " ₫";
            document.getElementById(id).innerHTML  = results['amount'] + " ₫";
            document.getElementById("cartTotal").innerHTML  = results['cartTotal'];
        })
    }
    });

</script>

@endpush