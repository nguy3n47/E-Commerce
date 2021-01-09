@extends('frontend.layouts.master')
@section('title', 'E-Shop || Reset password')
@section('main-content')
<section class="section-content">
    <div class="container">
        <div class="card mx-auto" style="max-width:400px; margin-top:20px; margin-bottom:20px;">
            <div class="card-body">
                <h4 class="card-title mb-4">Reset your password</h4>
                <form method="POST" action="">
                    @csrf
                    @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                    @endforeach 
                    
                    <div class="form-row">
                        <div class="col form-group">
                            <label for="password">New Password</label>
                            <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->

                    <div class="form-row">
                        <div class="col form-group">
                            <label for="password">New Confirm Password</label>
                            <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>
            </div> <!-- card-body.// -->
        </div>
    </div><!-- container // -->
</section>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
@endpush