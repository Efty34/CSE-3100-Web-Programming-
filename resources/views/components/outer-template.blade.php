<!DOCTYPE html>
<html>

<head>
    <title>InFoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- ------------- Custom CSS ------------- --}}
    @include('partials._custom-css')

    {{-- ------------- Imported CSS ------------- --}}
    @include('partials._imported-css')

    {{-- ------------- Icons ------------- --}}
    @include('partials._icons')

    {{-- ------------------ Custom JS ------------------ --}}
    @include('partials._custom-js')

    {{-- ------------------ Imported JS ------------------ --}}
    @include('partials._imported-js')

</head>


<body>

    @include('partials._nav-bar')


    <main>

        {{ $slot }}

    </main>




</body>

</html>
