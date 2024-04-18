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


    <script src="{{ asset('auth_assets/auth_app.js') }}"></script>
         
</body>

</html>
