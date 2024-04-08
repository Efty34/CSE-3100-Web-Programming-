<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage()
    {
        return view('index.landing-page');
    }
}
