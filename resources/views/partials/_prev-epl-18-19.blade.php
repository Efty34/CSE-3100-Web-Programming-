<div class="container pt-5 mb-5 bg-gray">
    @include('partials._prev-heading-list')
    <table id="example3" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="text-white">Name</th>
                <th class="text-white">Code</th>
                <th class="text-white">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs1819 as $club)
                <tr>
                    <td class="text-white">{{ $club['name'] }}</td>
                    <td class="text-white">{{ $club['code'] }}</td>
                    <td class="text-white">{{ $club['country'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('partials._prev-heading-summary')
    <table id="example4" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="text-white">Round</th>
                <th class="text-white">Date</th>
                <th class="text-white">Home Team</th>
                <th class="text-white">Away Team</th>
                <th class="text-white">Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches1819 as $match)
                <tr class="text-white">
                    <td class="text-white">{{ $match['round'] }}</td>
                    <td class="text-white">{{ $match['date'] }}</td>
                    <td class="text-white">{{ $match['team1'] }}</td>
                    <td class="text-white">{{ $match['team2'] }}</td>
                    <td class="text-white">{{ $match['score']['ft'][0] }} - {{ $match['score']['ft'][1] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
</div>