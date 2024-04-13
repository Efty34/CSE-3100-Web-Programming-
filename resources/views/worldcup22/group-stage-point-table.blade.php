<x-outer-template>

<link rel="stylesheet" type="text/css" href="{{ asset('worldcup22_assets/worldcup22_style.css') }}">


<section id="points">

    <div class="container">
        <a href="{{ route('worldcup22.result-table') }}"><h2 class="standings-subheading2">Match Schedule</h2></a>

        <h2 class="standings-subheading">Group Stage Points Table</h2>
        <div class="points-container">

            @foreach ($datas as $group)
                <div class="points-table">
                    <h2 class="group-heading">{{ $group['group'] }}</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Team</th>
                                <th>MP</th>
                                <th>L</th>
                                <th>D</th>
                                <th>W</th>
                                <th>Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($group['teams'] as $team)
                                <tr>
                                    <td>
                                        <div class="d-a">
                                            <img src="{{ $team['flag'] }}" alt="{{ $team['Team'] }}"
                                                class="team-flag" />
                                            <span>{{ $team['Team'] }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $team['match_play'] }}</td>
                                    <td>{{ $team['loss'] }}</td>
                                    <td>{{ $team['draw'] }}</td>
                                    <td>{{ $team['win'] }}</td>
                                    <td>{{ $team['points'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach

        </div>
    </div>
</section>


    <script defer src="{{ asset('worldcup22_assets/worldcup22_script.js') }}"></script>
 

</x-outer-template>