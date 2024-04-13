<x-outer-template>

    <link rel="stylesheet" type="text/css" href="{{ asset('worldcup22_assets/result_style.css') }}">
    
    <a href="{{ route('worldcup22.group-stage-point-table') }}"><h5 class="standings-heading2">Group Stage Point Table</h5></a>
    <h2 class="standings-heading1">Match Schedule</h2>

    <div class="matchs">
    
        @foreach ($jsonData as $match)
            <div class="match">
                <div class="match-info">
                    <h4 class="group">{{ $match['Group'] }}</h4>
                    <h4>Match Number <span class="badge">{{ $match['MatchNumber'] }}</span></h4>
                </div>
                <div class="flags">
                    <div class="home-flag">
                        <img src="{{ $match['flag'][1] }}" alt="{{ $match['HomeTeam'] }}" class="flag" />
                        <h3 class="home-team">{{ $match['HomeTeam'] }}</h3>
                    </div>
                    <span class="vs">VS</span>
                    <div class="away-flag">
                        <img src="{{ $match['flag'][0] }}" alt="{{ $match['AwayTeam'] }}" class="flag" />
                        <h3 class="away-team">{{ $match['AwayTeam'] }}</h3>
                    </div>
                </div>
                <div class="time-area">
                    @php
                        $dateTime = new DateTime($match['DateUtc']);
                    @endphp
                    <div class="time">
                        <h4 class="month">{{ $dateTime->format('M') }}</h4>
                        <h4 class="day">{{ $dateTime->format('D') }}</h4>
                        <h4 class="date">{{ $dateTime->format('d') }}</h4>
                    </div>
                    <h4 class="match-time">{{ $dateTime->format('H:i') }}</h4>
                </div>
            </div>
        @endforeach
    </div>
    
        <script defer src="{{ asset('worldcup22_assets/result_script.js') }}"></script>
    
    </x-outer-template>