<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

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
        return view('homepage.admin-dashboard',[
            'players' => Players::all()
        ]);
    }
}
