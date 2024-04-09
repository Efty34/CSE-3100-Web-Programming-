
@include('partials._prev-head-links')
<x-outer-template>

    <link rel="stylesheet" href="{{ asset('prevseason_assets/prev_style.css') }}">

    <h2 class="text-light text-center mt-4"><u>2019 - 2020 Season</u></h2>
    @include('partials._prev-epl-19-20')

    

    <h2 class="text-light text-center mt-4"><u>2018 - 2019 Season</u></h2>
    @include('partials._prev-epl-18-19')


</x-outer-template>