<?php

namespace App\Http\Controllers;

use App\Models\EplClubs;
use Illuminate\Http\Request;

class EplController extends Controller
{
    public function eplClubCardPage()
    {
        return view('epl.la-liga-clubs', [
            'epl_clubs' => EplClubs::all()
        ]);
    }

    public function createClub()
    {
        return view('epl.create-club');
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



        $epl_club = new EplClubs();
        $epl_club->club_name = $request->club_name;
        $epl_club->logo = $logoImg;
        $epl_club->founded_year = $request->founded_year;
        $epl_club->country = $request->country;
        $epl_club->social = $request->social;
        $epl_club->league = $request->league;
        $epl_club->world_ranking = $request->world_ranking;
        $epl_club->market_value = $request->market_value;
        $epl_club->champions_league = $request->champions_league;
        $epl_club->league_trophy = $request->league_trophy;
        $epl_club->stadium_name = $request->stadium_name;
        $epl_club->capacity = $request->capacity;
        $epl_club->stadium_picture =  $stadiumpic;
        $epl_club->manager = $request->manager;

        $epl_club->name1 = $request->name1;
        $epl_club->position1 = $request->position1;

        $epl_club->name2 = $request->name2;
        $epl_club->position2 = $request->position2;

        $epl_club->name3 = $request->name3;
        $epl_club->position3 = $request->position3;

        $epl_club->name4 = $request->name4;
        $epl_club->position4 = $request->position4;

        $epl_club->name5 = $request->name5;
        $epl_club->position5 = $request->position5;

        $epl_club->name6 = $request->name6;
        $epl_club->position6 = $request->position6;

        $epl_club->name7 = $request->name7;
        $epl_club->position7 = $request->position7;

        $epl_club->name8 = $request->name8;
        $epl_club->position8 = $request->position8;

        $epl_club->name9 = $request->name9;
        $epl_club->position9 = $request->position9;

        $epl_club->name10 = $request->name10;
        $epl_club->position10 = $request->position10;

        $epl_club->name11 = $request->name11;
        $epl_club->position11 = $request->position11;


        $epl_club->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club created successfully');
    }

    public function showClub(EplClubs $club)
    {
        return view('epl.show-club', [
            'epl_club' => $club
        ]);
    }

    public function updateClub($id)
    {
        $club = EplClubs::where('id', $id)->first();
        return view('epl.update-club', ['epl_club' => $club]);
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


        $epl_club = EplClubs::where('id', $id)->first();

        // Check and update the logo if provided
        if ($request->hasFile('logo')) {
            $logoImg = time() . '_logo.' . $request->logo->extension();
            $request->logo->move(public_path('laliga_storage'), $logoImg);
            $epl_club->logo = $logoImg;
        }

        if ($request->hasFile('stadium_picture')) {
            $stadiumpic = time() . '_stadium_picture.' . $request->stadium_picture->extension();
            $request->stadium_picture->move(public_path('laliga_storage'), $stadiumpic);
            $epl_club->stadium_picture =  $stadiumpic;
        }


        $epl_club->club_name = $request->club_name;
        $epl_club->founded_year = $request->founded_year;
        $epl_club->country = $request->country;
        $epl_club->social = $request->social;
        $epl_club->league = $request->league;
        $epl_club->world_ranking = $request->world_ranking;
        $epl_club->market_value = $request->market_value;
        $epl_club->champions_league = $request->champions_league;
        $epl_club->league_trophy = $request->league_trophy;
        $epl_club->stadium_name = $request->stadium_name;
        $epl_club->capacity = $request->capacity;
        $epl_club->manager = $request->manager;

        $epl_club->name1 = $request->name1;
        $epl_club->position1 = $request->position1;

        $epl_club->name2 = $request->name2;
        $epl_club->position2 = $request->position2;

        $epl_club->name3 = $request->name3;
        $epl_club->position3 = $request->position3;

        $epl_club->name4 = $request->name4;
        $epl_club->position4 = $request->position4;

        $epl_club->name5 = $request->name5;
        $epl_club->position5 = $request->position5;

        $epl_club->name6 = $request->name6;
        $epl_club->position6 = $request->position6;

        $epl_club->name7 = $request->name7;
        $epl_club->position7 = $request->position7;

        $epl_club->name8 = $request->name8;
        $epl_club->position8 = $request->position8;

        $epl_club->name9 = $request->name9;
        $epl_club->position9 = $request->position9;

        $epl_club->name10 = $request->name10;
        $epl_club->position10 = $request->position10;

        $epl_club->name11 = $request->name11;
        $epl_club->position11 = $request->position11;

        $epl_club->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club updated successfully');
    }

    public function deleteClub($id)
    {
        $epl_club = EplClubs::where('id', $id)->first();
        $epl_club->delete();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Club deleted successfully');
    }
}
