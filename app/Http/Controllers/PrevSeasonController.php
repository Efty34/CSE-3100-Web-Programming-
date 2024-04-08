<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PrevSeasonController extends Controller
{
    public function previousEplSeasons (){
        try {
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/en.1.clubs.json')->throw()->json();
            $clubs = $clubsData['clubs'];
    
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/en.1.json')->throw()->json();
            $matches = $matchesData['matches'];
    
            return view('index.prev-epl', [
                'clubs' => $clubs,
                'matches' => $matches
            ]);
        } catch (\Exception $e) {
            
            return view('index.prev-epl', [
                'error' => 'Failed to retrieve data. Please try again later.'
            ]);
        }
    }
}
