@extends('frontend.layouts.master')
@section('title', 'E-Shop || Reset password')
@section('main-content')
<section class="section-content">
    <div class="container">
        <div class="card mx-auto" style="max-width:400px; margin-top:20px; margin-bottom:20px;">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Sent! Check your Email</h4>
                <form method="POST" action="">
                    @csrf
                    @if(session()->has('getUser'))
                        <p class="text-center">We have sent an email with PIN code to {{session()->get('getUser')['user']->email}}</p>
                    @endif
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="code" class="form-control" placeholder="Code" type="text">
                        </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Continue</button>
                    </div> <!-- form-group// -->
                </form>
            </div> <!-- card-body.// -->
        </div>
    </div><!-- container // -->
</section>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
@endpush