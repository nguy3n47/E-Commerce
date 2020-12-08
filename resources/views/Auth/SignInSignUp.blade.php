<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Sign Up</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../public/client/css/SignInSignUp.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container ">
            <form action="#" class="sign-up-container form">
                <h1 class="title">Sign Up</h1>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="Email" placeholder="Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                </div>
                <div class="input-field">
                    <i class="fas fa-check-circle"></i>
                    <input type="password" placeholder="Confirm Password" />
                </div>
                <button>Sign Up</button>
                <p class="social-text">Or sign up with social platforms</p>
                <div class="social-container">
                    <a href="https://www.facebook.com/" class="social" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/" class="social" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://ads.google.com/" class="social" target="_blank">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://instagram.com/" class="social" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
        <div class="form-container ">
            <form action="#" class="sign-in-container form">
                <h1 class="title">Sign in</h1>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                </div>
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
                <p class="social-text">Or login using other social platforms</p>
                <div class="social-container">
                    <a href="https://www.facebook.com/" class="social" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/" class="social" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://ads.google.com/" class="social" target="_blank">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://instagram.com/" class="social" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>


            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay" class="form-box">
                <div class="overlay-panel overlay-left">
                    <button class="ghost" id="signIn">Sign In</button>
                    <h1>New here?</h1>
                    <p>Sign up and discover great amount of new opportunities!</p>
                    <img src="../public/client/images/undraw_mobile_login_ikmv.svg" alt="">
                </div>

                <div class="overlay-panel overlay-right">
                    <button class="ghost" id="signUp">Sign Up</button>
                    <h1>One of us?</h1>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                    <img src="../public/client/images/undraw_Access_account_re_8spm.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../public/client/js/SignInSignUp.js"></script>
</body>
</html>