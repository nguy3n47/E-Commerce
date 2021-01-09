@extends('frontend.layouts.master')
@section('title','E-Shop || Verify Email')
@section('main-content')
<section class="section-content padding-y">
    <!-- ============================ COMPONENT REGISTER   ================================= -->
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Verify Email</h4>
            </header>
            <form method="POST" action="{{route('verify.email.submit')}}">
                @csrf
                <div class="form-group">
                    <label>Code</label>
                    <input required name="code" type="text" class="form-control" placeholder="">
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Send </button>
                </div> <!-- form-group// -->
            </form>
        </article><!-- card-body.// -->
    </div> <!-- card .// -->
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!--/ End Login -->
@endsection