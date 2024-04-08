<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegendController extends Controller
{
    public function legendpage()
    {
        return view('index.legend-page');
    }
}
