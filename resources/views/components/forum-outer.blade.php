<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InFoo | Forum</title>
    <link rel="stylesheet" href="{{asset('auth_assets/forum_style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <main>
        {{$slot}}
    </main>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(function() {
                    flashMessage.style.opacity = '0'; 
                    setTimeout(function() {
                        flashMessage.style.display =
                            'none'; 
                    }, 1000);
                }, 4000);
            }
        });
    </script>
</body>

</html>