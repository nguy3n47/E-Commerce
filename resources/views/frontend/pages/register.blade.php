@extends('frontend.layouts.master')
@section('title','E-Shop || Register')
@section('main-content')
<section class="section-content padding-y">
    <!-- ============================ COMPONENT REGISTER   ================================= -->
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Sign up</h4>
            </header>
            <form method="POST" action="{{route('register.submit')}}">
                @csrf
                <div class="form-row">
                    <div class="col form-group">
                        <label>First name</label>
                        <input required name="first_name" type="text" class="form-control" placeholder="">
                    </div> <!-- form-group end.// -->
                    <div class="col form-group">
                        <label>Last name</label>
                        <input required name="last_name" type="text" class="form-control" placeholder="">
                    </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->
                <div class="form-group">
                    <label>Email</label>
                    <input required name="email" type="email" class="form-control" placeholder="">
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <label>Phone</label>
                    <input required name="phone" type="text" class="form-control" placeholder="">
                </div> <!-- form-group end.// -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input required name="password" class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Confirm password</label>
                        <input required name="password_confirmation" class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Register </button>
                </div> <!-- form-group// -->
                <div class="form-group">
                    <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input"
                            checked="">
                        <div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a> </div>
                    </label>
                </div> <!-- form-group end.// -->
            </form>
        </article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="{{route('login')}}">Log In</a></p>
    <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!--/ End Login -->
@endsection