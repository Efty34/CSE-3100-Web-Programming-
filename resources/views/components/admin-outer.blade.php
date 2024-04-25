<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InFoo | Admin</title>

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!--css file-->
    <link rel="stylesheet" href="{{ asset('auth_assets/admin_style.css') }}" />
</head>

<body>

    <section class="sidebar">
        <a href="{{ route('index.landing-page') }}" class="logo">

            <span id="infoo-logo">InFoo</span>
        </a>

        <ul class="side-menu top">
            {{-- <li class="active">
        <a href="{{route('index.landing-page')}}" class="nav-link">
          <i class="fas fa-home"></i>
          <span class="text">Home</span>
        </a>
      </li> --}}
            <li class="active">
                <a href="#player" class="nav-link">
                    <i class="fas fa-people-group"></i>
                    <span class="text">Players</span>
                </a>
            </li>
            <li>
                <a href="#epl" class="nav-link">
                    <i class="fas fa-shield"></i>
                    <span class="text">EPL Clubs</span>
                </a>
            </li>
            <li>
                <a href="#laliga" class="nav-link">
                    <i class="fas fa-shield"></i>
                    <span class="text">La-Liga Clubs</span>
                </a>
            </li>
            <li>
                <a href="#bpl" class="nav-link">
                    <i class="fas fa-shield"></i>
                    <span class="text">Bundes Liga Clubs</span>
                </a>
            </li>
            <li>
                <a href="#ipl" class="nav-link">
                    <i class="fas fa-shield"></i>
                    <span class="text">Seria A Clubs</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#product" class="nav-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li>
                <a href="#order" class="nav-link">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="text">Ordered Products</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#message" class="nav-link">
                    <i class="fa-solid fa-message"></i>
                    <span class="text">Messages</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="/logout" class="logout">
                    <i class="fas fa-right-from-bracket"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    {{ $slot }}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(function() {
                    flashMessage.style.opacity = '0'; // First, fade out by setting opacity to 0
                    setTimeout(function() {
                        flashMessage.style.display =
                        'none'; // Then, set display to none after the fade
                    }, 1000); // Delay the display none to allow for fade effect
                }, 4000);
            }
        });
    </script>
    <script src="{{ asset('auth_assets/admin_app.js') }}"></script>
</body>

</html>
