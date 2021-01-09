<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/css-bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/css-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/css-responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/css-all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/css-style.css') }}" />
    <title>EShop - Admin</title>
</head>

<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card text-center" style="width: 400px">
            <div class="card-body">
                <h4 class="card-title mb-4">Sign In</h4>
                <form class="login-form" action="{{ route('admin.login.post') }}" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email" type="email" autofocus value="{{ old('email') }}">
                        </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="password" class="form-control" placeholder="Password" type="password">
                        </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <a href="#">Forgot password</a>
                    </div> <!-- form-group form-check .// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login </button>
                    </div> <!-- form-group// -->
                    
                </form>
            </div> <!-- card-body.// -->
        </div>
        <script src="{{ asset('backend/js/js-jquery-2.0.0.min.js') }}"></script>
        <script src="{{ asset('backend/js/js-bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/js/js-script.js') }}"></script>
</body>

</html>