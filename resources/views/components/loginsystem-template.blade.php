<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InFoo | LoginSystem</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('auth_assets/auth_style.css') }}" />
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}


    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    


</head>

<body>

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
    <script src="{{ asset('auth_assets/auth_app.js') }}"></script>
         
</body>

</html>
