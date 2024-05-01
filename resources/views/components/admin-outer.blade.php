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
