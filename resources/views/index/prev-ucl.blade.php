
@include('partials._prev-head-links')
<x-outer-template>

    <link rel="stylesheet" href="{{ asset('prevseason_assets/prev_style.css') }}">

    {{-- <h2 class="text-light text-center mt-4"><u>UCL 2019 - 2020</u></h2>
    @include('partials._prev-epl-19-20') --}}
    
    <h2 class="text-light text-center mt-4"><u>UCL 2018 - 2019</u></h2>
    @include('partials._prev-epl-18-19')


</x-outer-template>