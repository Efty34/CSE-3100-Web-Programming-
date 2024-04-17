<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InFoo | LoginSystem</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('auth_assets/auth_style.css') }}" />
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>


                <form action="" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" />

                </form>
            </div>
        </div>
        <div class="panels-container">

            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Welcome back! Ready to dive back into everything our website has to offer?</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="{{ asset('auth_assets/img1.svg') }}" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Welcome to our website! We're thrilled to have you here. 🌟

                        To get started and access all the exciting features, please sign up-</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="{{ asset('auth_assets/img2.svg') }}" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="{{ asset('auth_assets/auth_app.js') }}"></script>
</body>

</html>
