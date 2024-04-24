<?php

namespace App\Http\Controllers;

use App\Models\LaLigaClubs;
use Illuminate\Http\Request;

class LaLigaController extends Controller
{
    public function laligaClubCardPage()
    {
        return view('laliga.la-liga-clubs', [
            'la_liga_clubs' => LaLigaClubs::all()
        ]);
    }

    public function createClub()
    {
        return view('laliga.create-club');
    }

    public function storeClub(Request $request)
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

        ]);
        // Handle Logo
        $logoImg = time() . '_logo.' . $request->logo->extension();
        $request->logo->move(public_path('laliga_storage'), $logoImg);

        $stadiumpic = time() . '_stadium_picture.' . $request->stadium_picture->extension();
        $request->stadium_picture->move(public_path('laliga_storage'), $stadiumpic);



        $la_liga_club = new LaLigaClubs();
        $la_liga_club->club_name = $request->club_name;
        $la_liga_club->logo = $logoImg;
        $la_liga_club->founded_year = $request->founded_year;
        $la_liga_club->country = $request->country;
        $la_liga_club->social = $request->social;
        $la_liga_club->league = $request->league;
        $la_liga_club->world_ranking = $request->world_ranking;
        $la_liga_club->market_value = $request->market_value;
        $la_liga_club->champions_league = $request->champions_league;
        $la_liga_club->league_trophy = $request->league_trophy;
        $la_liga_club->stadium_name = $request->stadium_name;
        $la_liga_club->capacity = $request->capacity;
        $la_liga_club->stadium_picture =  $stadiumpic;
        $la_liga_club->manager = $request->manager;

        $la_liga_club->name1 = $request->name1;
        $la_liga_club->position1 = $request->position1;

        $la_liga_club->name2 = $request->name2;
        $la_liga_club->position2 = $request->position2;

        $la_liga_club->name3 = $request->name3;
        $la_liga_club->position3 = $request->position3;

        $la_liga_club->name4 = $request->name4;
        $la_liga_club->position4 = $request->position4;

        $la_liga_club->name5 = $request->name5;
        $la_liga_club->position5 = $request->position5;

        $la_liga_club->name6 = $request->name6;
        $la_liga_club->position6 = $request->position6;

        $la_liga_club->name7 = $request->name7;
        $la_liga_club->position7 = $request->position7;

        $la_liga_club->name8 = $request->name8;
        $la_liga_club->position8 = $request->position8;

        $la_liga_club->name9 = $request->name9;
        $la_liga_club->position9 = $request->position9;

        $la_liga_club->name10 = $request->name10;
        $la_liga_club->position10 = $request->position10;

        $la_liga_club->name11 = $request->name11;
        $la_liga_club->position11 = $request->position11;


        $la_liga_club->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club created successfully');
    }

    public function showClub(LaLigaClubs $club)
    {
        return view('laliga.show-club', [
            'la_liga_club' => $club
        ]);
    }

    public function updateClub($id)
    {
        $club = LaLigaClubs::where('id', $id)->first();
        return view('laliga.update-club', ['la_liga_club' => $club]);
    }

    public function saveUpdatClub(Request $request, $id)
    {
        $request->validate([
            'club_name' => 'required',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:10000',
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
            'stadium_picture' => 'nullable|mimes:png,jpg,jpeg|max:10000',
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

        ]);


        $la_liga_club = LaLigaClubs::where('id', $id)->first();

        // Check and update the logo if provided
        if ($request->hasFile('logo')) {
            $logoImg = time() . '_logo.' . $request->logo->extension();
            $request->logo->move(public_path('laliga_storage'), $logoImg);
            $la_liga_club->logo = $logoImg;
        }

        if ($request->hasFile('stadium_picture')) {
            $stadiumpic = time() . '_stadium_picture.' . $request->stadium_picture->extension();
            $request->stadium_picture->move(public_path('laliga_storage'), $stadiumpic);
            $la_liga_club->stadium_picture =  $stadiumpic;
        }


        $la_liga_club->club_name = $request->club_name;
        $la_liga_club->founded_year = $request->founded_year;
        $la_liga_club->country = $request->country;
        $la_liga_club->social = $request->social;
        $la_liga_club->league = $request->league;
        $la_liga_club->world_ranking = $request->world_ranking;
        $la_liga_club->market_value = $request->market_value;
        $la_liga_club->champions_league = $request->champions_league;
        $la_liga_club->league_trophy = $request->league_trophy;
        $la_liga_club->stadium_name = $request->stadium_name;
        $la_liga_club->capacity = $request->capacity;
        $la_liga_club->manager = $request->manager;

        $la_liga_club->name1 = $request->name1;
        $la_liga_club->position1 = $request->position1;

        $la_liga_club->name2 = $request->name2;
        $la_liga_club->position2 = $request->position2;

        $la_liga_club->name3 = $request->name3;
        $la_liga_club->position3 = $request->position3;

        $la_liga_club->name4 = $request->name4;
        $la_liga_club->position4 = $request->position4;

        $la_liga_club->name5 = $request->name5;
        $la_liga_club->position5 = $request->position5;

        $la_liga_club->name6 = $request->name6;
        $la_liga_club->position6 = $request->position6;

        $la_liga_club->name7 = $request->name7;
        $la_liga_club->position7 = $request->position7;

        $la_liga_club->name8 = $request->name8;
        $la_liga_club->position8 = $request->position8;

        $la_liga_club->name9 = $request->name9;
        $la_liga_club->position9 = $request->position9;

        $la_liga_club->name10 = $request->name10;
        $la_liga_club->position10 = $request->position10;

        $la_liga_club->name11 = $request->name11;
        $la_liga_club->position11 = $request->position11;

        $la_liga_club->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club updated successfully');
    }

    public function deleteClub($id)
    {
        $la_liga_club = LaLigaClubs::where('id', $id)->first();
        $la_liga_club->delete();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club deleted successfully');
    }
}
