<div class="container pt-5 bg-gray pb-5">
    <table id="example2" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="text-white">Round</th>
                <th class="text-white">Date</th>
                <th class="text-white">Team 1</th>
                <th class="text-white">Team 2</th>
                <th class="text-white">Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $match)
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