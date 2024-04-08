
@include('partials._prev-head-links')
<x-outer-template>

    <link rel="stylesheet" href="{{ asset('prevseason_assets/prev_style.css') }}">

    <h2 class="text-light text-center mt-4"><u>2019 - 2020 Season</u></h2>
    @include('partials._prev-heading-list')
    @include('partials._prev-list')
    

    @include('partials._prev-heading-summary')
    @include('partials._prev-summary')

</x-outer-template>