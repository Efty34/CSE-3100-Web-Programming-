<!DOCTYPE html>
<html>

<head>
    <title>InFoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	{{-- ------------- CSS ------------- --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage_assets/homepage_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('legend_assets/legend_style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	{{-- ------------------ JS ------------------ --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script defer src="{{ asset('homepage_assets/homepage_script.js') }}"></script>
    <script defer src="{{ asset('legend_assets/legend_script.js') }}"></script>


</head>


<body>

    @include('partials._nav-bar')


    <main>

        {{ $slot }}

    </main>




</body>

</html>
