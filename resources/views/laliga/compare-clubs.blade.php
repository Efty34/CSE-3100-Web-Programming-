@include('partials._prev-head-links')
<x-outer-template>
    <link rel="stylesheet" href="{{ asset('compare_assets/compare_style.css') }}">

    <h2 class="text-light text-center mt-4"><u>Compare Clubs</u></h2>

    <div class="dropdown-img">
        <div class="form-button">
            <form id="compareClubForm" action="/clubs/compareaction" method="POST" onsubmit="return validateClubForm()">
                @csrf
                <select name="club1" id="club1" class="form-select" required>
                    <option value="" selected>Select Club 1</option>
                    @foreach ($alls as $club)
                        <option value="{{ $club['id'] }}-{{ $club['model_type'] }}">
                            {{ $club['club_name'] }} ({{ $club['model_type'] }})
                        </option>
                    @endforeach
                </select>
                <button>VS</button>
                <select name="club2" id="club2" class="form-select" required>
                    <option value="" selected>Select Club 2</option>
                    @foreach ($alls as $club)
                        <option value="{{ $club['id'] }}-{{ $club['model_type'] }}">
                            {{ $club['club_name'] }} ({{ $club['model_type'] }})
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>

    <script>
        function validateClubForm() {
            var club1 = document.getElementById('club1').value;
            var club2 = document.getElementById('club2').value;

            if (club1 === "" || club2 === "") {
                alert("Please select both clubs.");
                return false; 
            }

            if (club1 === club2) {
                alert("Please select different clubs.");
                return false;
            }

            return true; 
        }
    </script>



    @if (isset($club1) && isset($club2))
        <div class="container pt-5 mb-5 md-5 bg-gray">
            <table id="example" class="table table-striped table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-white">Club 1</th>
                        <th class="text-white">Attributes</th>
                        <th class="text-white">Club 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['club_name'] }}</td>
                        <td class="text-white">1. Club Name</td>
                        <td class="text-white">{{ $club2['club_name'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['country'] }}</td>
                        <td class="text-white">2. Country</td>
                        <td class="text-white">{{ $club2['country'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['league'] }}</td>
                        <td class="text-white">3. League</td>
                        <td class="text-white">{{ $club2['league'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['world_ranking'] }}</td>
                        <td class="text-white">4. World Ranking</td>
                        <td class="text-white">{{ $club2['world_ranking'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['market_value'] }}</td>
                        <td class="text-white">5. Market Value</td>
                        <td class="text-white">{{ $club2['market_value'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['champions_league'] }}</td>
                        <td class="text-white">6. Champions League</td>
                        <td class="text-white">{{ $club2['champions_league'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['league_trophy'] }}</td>
                        <td class="text-white">7. League Trophy</td>
                        <td class="text-white">{{ $club2['league_trophy'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['stadium_name'] }}</td>
                        <td class="text-white">8. Stadium Name</td>
                        <td class="text-white">{{ $club2['stadium_name'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['capacity'] }}</td>
                        <td class="text-white">9. Capacity</td>
                        <td class="text-white">{{ $club2['capacity'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $club1['manager'] }}</td>
                        <td class="text-white">10. Manager</td>
                        <td class="text-white">{{ $club2['manager'] }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white"></td>
                        <td class="text-white">11. Squad</td>
                        <td class="text-white"></td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name1'] }}</td>
                        <td class="text-white">12. {{ $club1['position1'] }}</td>
                        <td class="text-white">{{ $club2['name1'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name2'] }}</td>
                        <td class="text-white">13. {{ $club1['position2'] }}</td>
                        <td class="text-white">{{ $club2['name2'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name3'] }}</td>
                        <td class="text-white">14. {{ $club1['position3'] }}</td>
                        <td class="text-white">{{ $club2['name3'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name4'] }}</td>
                        <td class="text-white">15. {{ $club1['position4'] }}</td>
                        <td class="text-white">{{ $club2['name4'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name5'] }}</td>
                        <td class="text-white">16. {{ $club1['position5'] }}</td>
                        <td class="text-white">{{ $club2['name5'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name6'] }}</td>
                        <td class="text-white">17. {{ $club1['position6'] }}</td>
                        <td class="text-white">{{ $club2['name6'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name7'] }}</td>
                        <td class="text-white">18. {{ $club1['position7'] }}</td>
                        <td class="text-white">{{ $club2['name7'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name8'] }}</td>
                        <td class="text-white">19. {{ $club1['position8'] }}</td>
                        <td class="text-white">{{ $club2['name8'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name9'] }}</td>
                        <td class="text-white">20. {{ $club1['position9'] }}</td>
                        <td class="text-white">{{ $club2['name9'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name10'] }}</td>
                        <td class="text-white">21. {{ $club1['position10'] }}</td>
                        <td class="text-white">{{ $club2['name10'] }}</td>
                    </tr>

                    <tr class="text-white">
                        <td class="text-white">{{ $club1['name11'] }}</td>
                        <td class="text-white">22. {{ $club1['position11'] }}</td>
                        <td class="text-white">{{ $club2['name11'] }}</td>
                    </tr>


                </tbody>

            </table>

        </div>
    @endif

</x-outer-template>
