<x-outer-template>

    <div class="cards">
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/ucl.png') }}" alt="" width="70">
            <a href="{{ route('index.previous-ucl')}}">
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
            <a href="{{ route('index.previous-la-liga-seasons') }}">
                <p class="tip">La Liga</p>
            </a>
        </div>
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/bundas.png') }}" alt="" width="50">
            <a href="{{ route('index.previous-bundes-seasons') }}">
                <p class="tip">BundesLiga</p>
            </a>
        </div>
        <div class="card red">
            <img src="{{ asset('leaguelistpage_assets/seriea.png') }}" alt="" width="50">
            <a href="{{ route('index.previous-seriea-seasons') }}">
                <p class="tip">Serie A</p>
            </a>
        </div>
    </div>

</x-outer-template>
