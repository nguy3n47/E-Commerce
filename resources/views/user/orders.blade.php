@extends('frontend.layouts.master')
@section('title', 'E-Shop || Orders')
@section('main-content')

<section class="section-content padding-y bg">
    <div class="container">
        <!-- =========================  COMPONENT MYORDER 1 ========================= -->
        <div class="row">
            <aside class="col-md-3">
                <!--   SIDEBAR   -->
                <ul class="list-group">
                    <a class="list-group-item active" href="#"> List Orders </a>
                </ul>
                <br>
                <a class="btn btn-light btn-block" href="#"> <i class="fa fa-power-off"></i> <span class="text"></span>
                </a>
                <!--   SIDEBAR .//END   -->
            </aside>
            @if (count($orders) == 0)
            <div>
                <h1>No Orders Yet</h1>
            </div>
            @else
            <main class="col-md-9">
                @foreach($orders as $order)
                <article class="card mb-3">
                    <header class="card-header">
                        <strong class="d-inline-block mr-0">Order ID: {{$order[0]->order_number}}</strong>
                        @if($order[0]->status == 'pending')
                        <span class="badge badge-secondary mr-5"> {{$order[0]->status}} </span>
                        @elseif($order[0]->status == 'process')
                        <span class="badge badge-info mr-5"> {{$order[0]->status}} </span>
                        @elseif($order[0]->status == 'shipping')
                        <span class="badge badge-primary mr-5"> {{$order[0]->status}} </span>
                        @elseif($order[0]->status == 'delivered')
                        <span class="badge badge-success mr-5"> {{$order[0]->status}}</span>
                        @elseif($order[0]->status == 'cancel')
                        <span class="badge badge-danger mr-5"> {{$order[0]->status}} </span>
                        @endif
                        <span>Order Date: {{$order[0]->created_at}}</span>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="text-muted">Delivery to</h6>
                                <p>Name: {{$order[0]->fullname}} <br>
                                    Phone: {{$order[0]->phone}} <br>
                                    Email: {{$order[0]->email}} <br>
                                    Address: {{$order[0]->address}}
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="text-muted">Payment</h6>
                                <span class="text-success">
                                @if($order[0]->payment_menthod == 'cod')
                                <i class="fab fa-lg fa fa-truck"></i>
                                   COD
                                @elseif($order[0]->payment_menthod == 'visa')
                                <i class="fab fa-lg fa-cc-visa"></i>
                                    Visa
                                @elseif($order[0]->payment_menthod == 'paypal')
                                <i class="fab fa-lg fa-cc-paypal"></i>
                                    PayPal
                                @elseif($order[0]->payment_menthod == 'zalopay')
                                <img src="https://laz-img-cdn.alicdn.com/tfs/TB10rN4lnM11u4jSZPxXXahcXXa-1024-1024.png" height="24">
                                    ZaloPay
                                @elseif($order[0]->payment_menthod == 'momo')
                                <img src="https://laz-img-cdn.alicdn.com/tfs/O1CN0174CwSq2NjastWFX1u_!!19999999999999-2-tps.png" height="24">
                                    MoMO
                                @elseif($order[0]->payment_menthod == 'airpay')
                                <img src="https://airpay.in.th/app/faq/image/logo-airpay-footer.png" height="24">
                                    AirPay
                                @endif
                                </span>
                                <p class="b">Total: {{number_format($order[0]->sub_total, 0, '', '.')}} ₫</p>
                            </div>
                        </div> <!-- row.// -->
                    </div> <!-- card-body .// -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            @foreach($order as $detail)
                            <tr>
                                <td width="65">
                                    <img src="{{ Storage::url($detail->pro_thumbnail) }}" class="border img-sm">
                                </td>
                                <td class="align-middle">
                                    <p class="title mb-0">{{$detail->pro_name}} </p>
                                    <p class="price text-muted mb-0">{{number_format($detail->price, 0, '', '.')}} ₫
                                    </p>
                                    <p>SL: {{$detail->quantity}} </p>
                                </td>
                                <td class="align-middle">{{number_format($detail->total, 0, '', '.')}} ₫</td>
                                <td class="align-middle" width="250"> <a href="#" class="btn btn-outline-primary">Track
                                        order</a> <a href="#" class="btn btn-light"> Details </a> </td>
                            </tr>
                            @endforeach
                        </table>
                    </div> <!-- table-responsive .end// -->
                </article> <!-- order-group.// -->
                @endforeach
            </main>
            @endif
        </div> <!-- row.// -->
        <!-- =========================  COMPONENT MYORDER 1 END.// ========================= -->
    </div>
</section>
@endsection
@push('scripts')
<script>

</script>
@endpush