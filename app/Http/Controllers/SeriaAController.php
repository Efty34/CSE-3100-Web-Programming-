<?php

namespace App\Http\Controllers;

use App\Models\SeriaAClubs;
use Illuminate\Http\Request;

class SeriaAController extends Controller
{
    public function seriaAClubCardPage()
    {
        return view('seriaa.la-liga-clubs', [
            'seria_a_clubs' => SeriaAClubs::all()
        ]);
    }

    public function createClub()
    {
        return view('seriaa.create-club');
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



        $seria_a_club = new SeriaAClubs();
        $seria_a_club->club_name = $request->club_name;
        $seria_a_club->logo = $logoImg;
        $seria_a_club->founded_year = $request->founded_year;
        $seria_a_club->country = $request->country;
        $seria_a_club->social = $request->social;
        $seria_a_club->league = $request->league;
        $seria_a_club->world_ranking = $request->world_ranking;
        $seria_a_club->market_value = $request->market_value;
        $seria_a_club->champions_league = $request->champions_league;
        $seria_a_club->league_trophy = $request->league_trophy;
        $seria_a_club->stadium_name = $request->stadium_name;
        $seria_a_club->capacity = $request->capacity;
        $seria_a_club->stadium_picture =  $stadiumpic;
        $seria_a_club->manager = $request->manager;

        $seria_a_club->name1 = $request->name1;
        $seria_a_club->position1 = $request->position1;

        $seria_a_club->name2 = $request->name2;
        $seria_a_club->position2 = $request->position2;

        $seria_a_club->name3 = $request->name3;
        $seria_a_club->position3 = $request->position3;

        $seria_a_club->name4 = $request->name4;
        $seria_a_club->position4 = $request->position4;

        $seria_a_club->name5 = $request->name5;
        $seria_a_club->position5 = $request->position5;

        $seria_a_club->name6 = $request->name6;
        $seria_a_club->position6 = $request->position6;

        $seria_a_club->name7 = $request->name7;
        $seria_a_club->position7 = $request->position7;

        $seria_a_club->name8 = $request->name8;
        $seria_a_club->position8 = $request->position8;

        $seria_a_club->name9 = $request->name9;
        $seria_a_club->position9 = $request->position9;

        $seria_a_club->name10 = $request->name10;
        $seria_a_club->position10 = $request->position10;

        $seria_a_club->name11 = $request->name11;
        $seria_a_club->position11 = $request->position11;


        $seria_a_club->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club created successfully');
    }

    public function showClub(SeriaAClubs $club)
    {
        return view('seriaa.show-club', [
            'seria_a_club' => $club
        ]);
    }

    public function updateClub($id)
    {
        $club = SeriaAClubs::where('id', $id)->first();
        return view('seriaa.update-club', ['seria_a_club' => $club]);
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


        $seria_a_club = SeriaAClubs::where('id', $id)->first();

        // Check and update the logo if provided
        if ($request->hasFile('logo')) {
            $logoImg = time() . '_logo.' . $request->logo->extension();
            $request->logo->move(public_path('laliga_storage'), $logoImg);
            $seria_a_club->logo = $logoImg;
        }

        if ($request->hasFile('stadium_picture')) {
            $stadiumpic = time() . '_stadium_picture.' . $request->stadium_picture->extension();
            $request->stadium_picture->move(public_path('laliga_storage'), $stadiumpic);
            $seria_a_club->stadium_picture =  $stadiumpic;
        }


        $seria_a_club->club_name = $request->club_name;
        $seria_a_club->founded_year = $request->founded_year;
        $seria_a_club->country = $request->country;
        $seria_a_club->social = $request->social;
        $seria_a_club->league = $request->league;
        $seria_a_club->world_ranking = $request->world_ranking;
        $seria_a_club->market_value = $request->market_value;
        $seria_a_club->champions_league = $request->champions_league;
        $seria_a_club->league_trophy = $request->league_trophy;
        $seria_a_club->stadium_name = $request->stadium_name;
        $seria_a_club->capacity = $request->capacity;
        $seria_a_club->manager = $request->manager;

        $seria_a_club->name1 = $request->name1;
        $seria_a_club->position1 = $request->position1;

        $seria_a_club->name2 = $request->name2;
        $seria_a_club->position2 = $request->position2;

        $seria_a_club->name3 = $request->name3;
        $seria_a_club->position3 = $request->position3;

        $seria_a_club->name4 = $request->name4;
        $seria_a_club->position4 = $request->position4;

        $seria_a_club->name5 = $request->name5;
        $seria_a_club->position5 = $request->position5;

        $seria_a_club->name6 = $request->name6;
        $seria_a_club->position6 = $request->position6;

        $seria_a_club->name7 = $request->name7;
        $seria_a_club->position7 = $request->position7;

        $seria_a_club->name8 = $request->name8;
        $seria_a_club->position8 = $request->position8;

        $seria_a_club->name9 = $request->name9;
        $seria_a_club->position9 = $request->position9;

        $seria_a_club->name10 = $request->name10;
        $seria_a_club->position10 = $request->position10;

        $seria_a_club->name11 = $request->name11;
        $seria_a_club->position11 = $request->position11;

        $seria_a_club->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club updated successfully');
    }

    public function deleteClub($id)
    {
        $seria_a_club = SeriaAClubs::where('id', $id)->first();
        $seria_a_club->delete();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club deleted successfully');
    }
}
