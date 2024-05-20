@include('partials._prev-head-links')
<x-outer-template>
    <link rel="stylesheet" href="{{ asset('compare_assets/compare_style.css') }}">

    <h2 class="text-light text-center mt-4"><u>Compare PLayers</u></h2>

    <div class="dropdown-img">

        <div class="form-button">
            <form id="compareForm" action="/players/compareaction" method="POST" onsubmit="return validateForm()">
                @csrf
                <select name="player1" id="player1" class="form-select" required>
                    <option value="" selected>Select Player 1</option>
                    @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{ $player->first_name . ' ' . $player->last_name }}
                        </option>
                    @endforeach
                </select>
                <button>
                    VS
                </button>
                <select name="player2" id="player2" class="form-select" required>
                    <option value="" selected>Select Player 2</option>
                    @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{ $player->first_name . ' ' . $player->last_name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <script>
            function validateForm() {
                var player1 = document.getElementById('player1').value;
                var player2 = document.getElementById('player2').value;

                if (player1 === "" || player2 === "") {
                    alert("Please select both players.");
                    return false; 
                }

                if (player1 === player2) {
                    alert("Please select different players.");
                    return false; 
                }

                return true; 
            }
        </script>




    </div>

    @if (isset($player1) && isset($player2))
        <div class="container pt-5 mb-5 md-5 bg-gray">

            <table id="example" class="table table-striped table-hover" style="width:100%">

                <thead>
                    <tr>
                        <th class="text-white">Player 1</th>
                        <th class="text-white">Attributes</th>
                        <th class="text-white">Player 2</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->first_name }}</td>
                        <td class="text-white">1. First Name</td>
                        <td class="text-white">{{ $player2->first_name }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->last_name }}</td>
                        <td class="text-white">2. Last Name</td>
                        <td class="text-white">{{ $player2->last_name }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->position }}</td>
                        <td class="text-white">3. Position</td>
                        <td class="text-white">{{ $player2->position }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->birth_date }}</td>
                        <td class="text-white">4. Birth Date</td>
                        <td class="text-white">{{ $player2->birth_date }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->birth_place }}</td>
                        <td class="text-white">5. Birth Place</td>
                        <td class="text-white">{{ $player2->birth_place }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->preferred_foot }}</td>
                        <td class="text-white">6. Preferred Foot</td>
                        <td class="text-white">{{ $player2->preferred_foot }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->height }}</td>
                        <td class="text-white">7. Height</td>
                        <td class="text-white">{{ $player2->height }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->market_value }}</td>
                        <td class="text-white">8. Market Value</td>
                        <td class="text-white">{{ $player2->market_value }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->outfitter }}</td>
                        <td class="text-white">9. Outfitter</td>
                        <td class="text-white">{{ $player2->outfitter }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->career_goals }}</td>
                        <td class="text-white">10. Career Goals</td>
                        <td class="text-white">{{ $player2->career_goals }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->world_cups }}</td>
                        <td class="text-white">11. World Cups</td>
                        <td class="text-white">{{ $player2->world_cups }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->continental_cups }}</td>
                        <td class="text-white">12. Continental Cups</td>
                        <td class="text-white">{{ $player2->continental_cups }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->ballon_dors }}</td>
                        <td class="text-white">13. Ballor dORs</td>
                        <td class="text-white">{{ $player2->ballon_dors }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->champions_league }}</td>
                        <td class="text-white">14. Champions League</td>
                        <td class="text-white">{{ $player2->champions_league }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->league_titles }}</td>
                        <td class="text-white">15. League Titles</td>
                        <td class="text-white">{{ $player2->league_titles }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->club_debut }}</td>
                        <td class="text-white">16. Club Debut</td>
                        <td class="text-white">{{ $player2->club_debut }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->current_club }}</td>
                        <td class="text-white">17. Current Club</td>
                        <td class="text-white">{{ $player2->current_club }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->previous_clubs }}</td>
                        <td class="text-white">18. Previous Clubs</td>
                        <td class="text-white">{{ $player2->previous_clubs }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->national_team }}</td>
                        <td class="text-white">19. National Team</td>
                        <td class="text-white">{{ $player2->national_team }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->national_debut }}</td>
                        <td class="text-white">20. National Debut</td>
                        <td class="text-white">{{ $player2->national_debut }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->overall }}</td>
                        <td class="text-white">21. Overall</td>
                        <td class="text-white">{{ $player2->overall }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->pace }}</td>
                        <td class="text-white">22. Pace</td>
                        <td class="text-white">{{ $player2->pace }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->shooting }}</td>
                        <td class="text-white">23. Shooting</td>
                        <td class="text-white">{{ $player2->shooting }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->passing }}</td>
                        <td class="text-white">24. Passing</td>
                        <td class="text-white">{{ $player2->passing }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->dribbling }}</td>
                        <td class="text-white">25. Dribbling</td>
                        <td class="text-white">{{ $player2->dribbling }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->defending }}</td>
                        <td class="text-white">26. Defending</td>
                        <td class="text-white">{{ $player2->defending }}</td>
                    </tr>
                    <tr class="text-white">
                        <td class="text-white">{{ $player1->physical }}</td>
                        <td class="text-white">27. Physical</td>
                        <td class="text-white">{{ $player2->physical }}</td>
                    </tr>

                </tbody>

            </table>

        </div>
    @endif

</x-outer-template>
