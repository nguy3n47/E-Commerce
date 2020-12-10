<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Password</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="../public/client/css/forgot.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container ">
            <form action="" method="POST" class="forgot-container form">
                @csrf
                <h1 class="title">Enter code</h1>
                <div class="input-field">
                    <i class="fas fa-code"></i>
                    <input type="text" name="code" placeholder="Enter here" />
                </div>
                <button type="submit">Send</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <button class="ghost" id="signIn"><i class="fas fa-arrow-left"></i></button>
                    <h1>Don't worry!</h1>
                    <p>We'll help you!</p>
                    <img src="../public/client/images/undraw_two_factor_authentication_namy.svg" alt="">
                </div>

            </div>
        </div>
    </div>
</body>

</html>
