<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\League;
use Illuminate\Http\Request;
use Mockery\Generator\Method;

class ClubController extends Controller
{
    public function create(League $league)
    {
        // $clubs = $league->clubs()->paginate(1); // Change 10 to the desired number of clubs per page
        // return view('clubs.create', compact('league', 'clubs'));
        return view('clubs.create', compact('league'));
    }

    public function store(Request $request, League $league)
    {
        $request->validate([
            'club_name' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg|max:10000',
            'founded_year' => 'required',
            'social' => 'required',
            'country' => 'required',
            'league' => 'required',
            'world_ranking' => 'required',
            'market_value' => 'required',
            'champions_league' => 'required',
            'league_trophy' => 'required',
            'stadium_name' => 'required',
            'capacity' => 'required',
            'stadium_picture' => 'required|mimes:png,jpg,jpeg|max:10000',
            'manager' => 'required',

            'name1' => 'required',
            'position1' => 'required',

            'name2' => 'required',
            'position2' => 'required',

            'name3' => 'required',
            'position3' => 'required',

            'name4' => 'required',
            'position4' => 'required',

            'name5' => 'required',
            'position5' => 'required',

            'name6' => 'required',
            'position6' => 'required',

            'name7' => 'required',
            'position7' => 'required',

            'name8' => 'required',
            'position8' => 'required',

            'name9' => 'required',
            'position9' => 'required',

            'name10' => 'required',
            'position10' => 'required',

            'name11' => 'required',
            'position11' => 'required'

            // 'league_id' => 'required|exists:leagues,id'
        ]);

        $logoImg = time() . '_logo.' . $request->logo->extension();
        $request->logo->move(public_path('club_storage'), $logoImg);

        $stadiumpic = time() . '_stadium_picture.' . $request->stadium_picture->extension();
        $request->stadium_picture->move(public_path('club_storage'), $stadiumpic);

        $club = new Club();

        $club->club_name = $request->club_name;
        $club->logo = $logoImg;
        $club->founded_year = $request->founded_year;
        $club->country = $request->country;
        $club->social = $request->social;
        $club->league = $request->league;
        $club->world_ranking = $request->world_ranking;
        $club->market_value = $request->market_value;
        $club->champions_league = $request->champions_league;
        $club->league_trophy = $request->league_trophy;
        $club->stadium_name = $request->stadium_name;
        $club->capacity = $request->capacity;
        $club->stadium_picture =  $stadiumpic;
        $club->manager = $request->manager;

        $club->name1 = $request->name1;
        $club->position1 = $request->position1;

        $club->name2 = $request->name2;
        $club->position2 = $request->position2;

        $club->name3 = $request->name3;
        $club->position3 = $request->position3;

        $club->name4 = $request->name4;
        $club->position4 = $request->position4;

        $club->name5 = $request->name5;
        $club->position5 = $request->position5;

        $club->name6 = $request->name6;
        $club->position6 = $request->position6;

        $club->name7 = $request->name7;
        $club->position7 = $request->position7;

        $club->name8 = $request->name8;
        $club->position8 = $request->position8;

        $club->name9 = $request->name9;
        $club->position9 = $request->position9;

        $club->name10 = $request->name10;
        $club->position10 = $request->position10;

        $club->name11 = $request->name11;
        $club->position11 = $request->position11;

        $club->league_id = $league->id;

        $club->save();


        return redirect()->route('homepage.admin-dashboard', $league->id)
            ->with('message', 'Club added successfully.');
    }

    public function index(League $league)
    {
        $clubs = $league->clubs()->get();
        return view('clubs.club-cards', compact('league', 'clubs'));
    }
    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    public function edit(League $league, Club $club)
    {
        return view('clubs.edit', compact('league', 'club'));
    }
    public function destroy(League $league, Club $club)
    {
        $club->delete();
        return redirect()->route('homepage.admin-dashboard', $league->id)->with('message', 'Club deleted successfully.');
    }
    public function update(Request $request, League $league, Club $club)
    {
        $request->validate([
            'club_name' => 'required',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:10000',
            'founded_year' => 'required',
            'social' => 'required',
            'country' => 'required',
            'world_ranking' => 'required',
            'market_value' => 'required',
            'champions_league' => 'required',
            'league_trophy' => 'required',
            'stadium_name' => 'required',
            'capacity' => 'required',
            'stadium_picture' => 'nullable|mimes:png,jpg,jpeg|max:10000',
            'manager' => 'required',
            // Player validation
            'name1' => 'required', 'position1' => 'required',
            'name2' => 'required', 'position2' => 'required',
            'name3' => 'required', 'position3' => 'required',
            'name4' => 'required', 'position4' => 'required',
            'name5' => 'required', 'position5' => 'required',
            'name6' => 'required', 'position6' => 'required',
            'name7' => 'required', 'position7' => 'required',
            'name8' => 'required', 'position8' => 'required',
            'name9' => 'required', 'position9' => 'required',
            'name10' => 'required', 'position10' => 'required',
            'name11' => 'required', 'position11' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $logoImg = time() . '_logoNew.' . $request->logo->extension();
            $request->logo->move(public_path('club_storage'), $logoImg);
            // $logoPath = $request->file('logo')->store('club_logos', 'public');
            $club->logo = $logoImg;
        }

        if ($request->hasFile('stadium_picture')) {
            $stadiumpic = time() . '_stadium_picture_New.' . $request->stadium_picture->extension();
            $request->stadium_picture->move(public_path('club_storage'), $stadiumpic);
            // $stadiumPicturePath = $request->file('stadium_picture')->store('stadium_pictures', 'public');
            $club->stadium_picture = $stadiumpic;
        }

        $club->update($request->only([
            'club_name', 'founded_year', 'social', 'country', 'world_ranking',
            'market_value', 'champions_league', 'league_trophy', 'stadium_name',
            'capacity', 'manager'
        ]));

        for ($i = 1; $i <= 11; $i++) {
            $club->{"name$i"} = $request->input("name$i");
            $club->{"position$i"} = $request->input("position$i");
        }

        $club->save();

        return redirect()->route('homepage.admin-dashboard', $league->id)->with('success', 'Club updated successfully.');
    }
}
