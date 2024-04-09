<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function playerCardPage()
    {
        return view('index.players', [
            'players' => Players::all()
        ]);
    }

    public function createPlayer()
    {
        return view('index.create-player');
    }
    public function storePlayer(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'profile_image' => 'required|mimes:png,jpg,jpeg|max:10000',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'social' => 'required',
            'preferred_foot' => 'required',
            'height' => 'required',
            'market_value' => 'required',
            'outfitter' => 'required',
            'career_goals' => 'required',
            'world_cups' => 'required',
            'continental_cups' => 'required',
            'ballon_dors' => 'required',
            'champions_league' => 'required',
            'league_titles' => 'required',
            'club_debut' => 'required',
            'current_club' => 'required',
            'previous_clubs' => 'required',
            'national_team' => 'required',
            'national_debut' => 'required',
            'overall' => 'required',
            'pace' => 'required',
            'shooting' => 'required',
            'passing' => 'required',
            'dribbling' => 'required',
            'defending' => 'required',
            'physical' => 'required',
            'photo1' => 'required|mimes:png,jpg,jpeg|max:50000',
            'photo2' => 'required|mimes:png,jpg,jpeg|max:50000',
            'photo3' => 'required|mimes:png,jpg,jpeg|max:50000',
            'photo4' => 'required|mimes:png,jpg,jpeg|max:50000',
            'photo5' => 'required|mimes:png,jpg,jpeg|max:50000'
        ]);


        // Handle profile image upload
        $profileImg = time() . '_profile.' . $request->profile_image->extension();
        $request->profile_image->move(public_path('players_storage'), $profileImg);

        // Handle additional images (photo1 to photo5)
        $images = [];
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('photo' . $i)) {
                $imageName = time() . '_photo' . $i . '.' . $request->{'photo' . $i}->extension();
                $request->{'photo' . $i}->move(public_path('players_storage'), $imageName);
                $images[] = $imageName; 
            }
        }


        $player = new Players();
        $player->first_name = $request->first_name;
        $player->last_name = $request->last_name;
        $player->position = $request->position;
        $player->profile_image = $profileImg;
        $player->birth_date = $request->birth_date;
        $player->birth_place = $request->birth_place;
        $player->social = $request->social;
        $player->preferred_foot = $request->preferred_foot;
        $player->height = $request->height;
        $player->market_value = $request->market_value;
        $player->outfitter = $request->outfitter;
        $player->career_goals = $request->career_goals;
        $player->world_cups = $request->world_cups;
        $player->continental_cups = $request->continental_cups;
        $player->ballon_dors = $request->ballon_dors;
        $player->champions_league = $request->champions_league;
        $player->league_titles = $request->league_titles;
        $player->club_debut = $request->club_debut;
        $player->current_club = $request->current_club;
        $player->previous_clubs = $request->previous_clubs;
        $player->national_team = $request->national_team;
        $player->national_debut = $request->national_debut;
        $player->overall = $request->overall;
        $player->pace = $request->pace;
        $player->shooting = $request->shooting;
        $player->passing = $request->passing;
        $player->dribbling = $request->dribbling;
        $player->defending = $request->defending;
        $player->physical = $request->physical;
        if (isset($image1)) {
            $player->photo1 = $image1;
        }
        if (isset($image2)) {
            $player->photo2 = $image2;
        }
        if (isset($image3)) {
            $player->photo3 = $image3;
        }
        if (isset($image4)) {
            $player->photo4 = $image4;
        }
        if (isset($image5)) {
            $player->photo5 = $image5;
        }

        $player->save();

        return redirect()->route('index.players')->with('message', 'Player created successfully');
    }
}
