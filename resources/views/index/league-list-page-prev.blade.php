<x-outer-template>

    <div class="cards">
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/ucl.png') }}" alt="" width="70">
            <a href="">
                <p class="tip">Champions League</p>
            </a>
        </div>
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/epl.png') }}" alt="" width="50">
            <a href="{{ route('index.previous-epl-seasons') }}">
                <p class="tip">English Premier League</p>
            </a>
        </div>
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/laliga.png') }}" alt="" width="50">
            <a href="">
                <p class="tip">La Liga</p>
            </a>
        </div>
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/bundas.png') }}" alt="" width="50">
            <a href="">
                <p class="tip">BundesLiga</p>
            </a>
        </div>
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/liga1.png') }}" alt="" width="50">
            <a href="">
                <p class="tip">Ligue 1</p>
            </a>
        </div>
    </div>

</x-outer-template>
