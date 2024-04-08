<!DOCTYPE html>
<html>

<head>
    <title>InFoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	{{-- ------------- Custom CSS ------------- --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage_assets/homepage_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('legend_assets/legend_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('leaguelistpage_assets/leaguelist_style.css') }}">

	{{-- ------------- Imported CSS ------------- --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css"> --}}


    {{-- ------------- Icons ------------- --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



	{{-- ------------------ Custom JS ------------------ --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script defer src="{{ asset('homepage_assets/homepage_script.js') }}"></script>
    <script defer src="{{ asset('legend_assets/legend_script.js') }}"></script>

	{{-- ------------------ Imported JS ------------------ --}}
    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>



</head>


<body>

    @include('partials._nav-bar')


    <main>

        {{ $slot }}

    </main>




</body>

</html>
