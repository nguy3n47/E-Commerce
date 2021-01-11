@extends('frontend.layouts.master')
@section('title', 'E-Shop || Check Out')
@section('main-content')
<section class="section-pagetop bg">
    {{ csrf_field() }}
    <div class="container">
        <h2 class="title-page">Check Out</h2>
    </div> <!-- container //  -->
</section>
<section class="section-content padding-y">
    <div class="container">
        <!-- ============================ COMPONENT 2 ================================= -->
        <div class="row">
            <main class="col-md-8">
                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Review cart</h4>
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-md-6">
                                    <figure class="itemside  mb-4">
                                        <div class="aside"><img src="{{ Storage::url($item->options['photo'])}}"
                                                class="border img-sm"></div>
                                        <figcaption class="info">
                                            <p>{{$item->name}}</p>
                                            <p class="text-muted">x{{$item->qty}} = {{number_format($item->price * $item->qty, 0, '', '.')}} ₫</p>
                                        </figcaption>
                                    </figure>
                                </div> <!-- col.// -->
                            @endforeach
                        </div> <!-- row.// -->
                    </div> <!-- card-body.// -->
                </article> <!-- card.// -->


                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Contact info</h4>
                        <form action="{{route('checkoutSubmit')}}" id="checkout-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Full name</label>
                                    <input name="name" required type="text" class="form-control" value="{{Auth::user()->name}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Email</label>
                                    <input name="email" required type="email" class="form-control" value={{Auth::user()->email}}>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Phone</label>
                                    <input name="phone" required type="text" class="form-control" value={{Auth::user()->phone}}>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Address</label>
                                    <input name="address" required type="text" class="form-control" value="{{Auth::user()->address}}">
                                </div>
                            </div> <!-- row.// -->
                        </form>
                    </div> <!-- card-body.// -->
                </article> <!-- card.// -->

                <article class="accordion" id="accordion_pay">
                    <div class="card">
                        <header class="card-header">
                            <img src="https://image.flaticon.com/icons/png/512/1981/1981845.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_card_cod">
                                <input class="form-check-input" name="payment-option" checked type="radio" value="option1">
                                <h6 class="form-check-label"> COD </h6>
                            </label>
                        </header>
                        <div id="pay_card_cod" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-muted">Some instructions about how to pay </p>
                                <p>
                                   
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payment-paypal.png" class="float-right"
                                height="24">
                            <label class="form-check collapsed" data-toggle="collapse" data-target="#pay_paynet">
                                <input class="form-check-input" name="payment-option" type="radio"
                                    value="option2">
                                <h6 class="form-check-label">
                                    Paypal
                                </h6>
                            </label>
                        </header>
                        <div id="pay_paynet" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-center text-muted">Connect your PayPal account and use it to pay your
                                    bills. You'll be redirected to PayPal to add your billing information.</p>
                                <p class="text-center">
                                    <a href="#"><img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/btn-paypal.png"
                                            height="32"></a>
                                    <br><br>
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payment-card.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                <h6 class="form-check-label"> Credit Card </h6>
                            </label>
                        </header>
                        <div id="pay_payme" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="alert alert-success">Some information or instruction</p>
                                <form class="form-inline">
                                    <input type="text" class="form-control mr-2" placeholder="xxxx-xxxx-xxxx-xxxx"
                                        name="">
                                    <input type="text" class="form-control mr-2" style="width: 100px"
                                        placeholder="dd/yy" name="">
                                    <input type="number" maxlength="3" class="form-control mr-2" style="width: 100px"
                                        placeholder="cvc" name="">
                                    <button class="btn btn btn-success">OK</button>
                                </form>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="https://laz-img-cdn.alicdn.com/tfs/TB10rN4lnM11u4jSZPxXXahcXXa-1024-1024.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_card_ZaloPay">
                                <input class="form-check-input" name="payment-option" type="radio" value="option1">
                                <h6 class="form-check-label"> ZaloPay </h6>
                            </label>
                        </header>
                        <div id="pay_card_ZaloPay" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-muted">Some instructions about how to pay </p>
                                <p>
                                   
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="https://laz-img-cdn.alicdn.com/tfs/O1CN0174CwSq2NjastWFX1u_!!19999999999999-2-tps.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_card_momo">
                                <input class="form-check-input" name="payment-option" type="radio" value="option1">
                                <h6 class="form-check-label"> MoMo </h6>
                            </label>
                        </header>
                        <div id="pay_card_momo" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-muted">Some instructions about how to pay </p>
                                <p>
                                   
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="https://airpay.in.th/app/faq/image/logo-airpay-footer.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_card_airpay">
                                <input class="form-check-input" name="payment-option" type="radio" value="option1">
                                <h6 class="form-check-label"> AirPay </h6>
                            </label>
                        </header>
                        <div id="pay_card_airpay" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-muted">Some instructions about how to pay </p>
                                <p>
                                   
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                </article>
                <!-- accordion end.// -->
            </main> <!-- col.// -->
            <aside class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="mb-3">Overview</h4>
                        <dl class="dlist-align">
                            <dt class="text-muted">Payment method:</dt>
                            <dd>Cash</dd>
                        </dl>
                        <hr>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="h5">{{Cart::subtotal(0,'.','.')}} ₫</dd>
                        </dl>
                        <hr>
                        <button type="submit" form="checkout-form" class="btn btn-primary btn-block">Done</button>
                        <!-- <a href="{{route('checkoutSubmit')}}" class="btn btn-primary btn-block"> Done </a> -->
                    </div> <!-- card-body.// -->
                </div> <!-- card.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container .//  -->
</section>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
@endpush