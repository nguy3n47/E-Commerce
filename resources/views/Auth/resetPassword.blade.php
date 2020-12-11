<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="../public/client/css/forgot.css" />
</head>
<body>
    <div class="container" id="container">
        <div class="form-container ">
            <form action="" method="POST" class="forgot-container form">
                @csrf
                <h1 class="title">Reset Password</h1>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass1" placeholder="New Password" />
                </div>
                <div class="input-field">
                    <i class="fas fa-check-circle"></i>
                    <input type="password" name="pass2" placeholder="Confirm Password" />
                </div>
                <button type="submit">Reset</button>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <button class="ghost" id="signIn"><i class="fas fa-arrow-left"></i></button>
                    <h1>Welcome back!</h1>
                    <p>Now, please enter your password to get started!</p>
                    <img src="../public/client/images/undraw_order_confirmed_aaw7.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>