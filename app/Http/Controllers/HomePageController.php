<?php

namespace App\Http\Controllers;

use App\Models\Players;
use App\Models\EplClubs;
use App\Models\LaLigaClubs;
use Illuminate\Http\Request;
use App\Models\BundesLigaClubs;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userProfilePage()
    {
        return view('homepage.user-profile');
    }
    public function adminDashboard(){
        $players = Players::all();
        $la_liga_clubs = LaLigaClubs::all();
        $epl_clubs = EplClubs::all();
        $bundes_liga_clubs = BundesLigaClubs::all();
        
        return view('homepage.admin-dashboard', [
            'players' => $players,
            'la_liga_clubs' => $la_liga_clubs,
            'epl_clubs' => $epl_clubs,
            'bundes_liga_clubs' => $bundes_liga_clubs
        ]);
    }
}
