<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PrevSeasonController extends Controller
{

    public function previousUcl()
    {
        try {
            // UCL 19-20
            // $clubsData1920 = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/cl.clubs.json')->throw()->json();
            // $clubs1920 = $clubsData1920['clubs'];
            // $matchesData1920 = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/cl.json')->throw()->json();
            // $matches1920 = $matchesData1920['matches'];

            // UCL 18-19 
            $clubsData1819 = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/cl.clubs.json')->throw()->json();
            $clubs1819 = $clubsData1819['clubs'];
            $matchesData1819 = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/cl.json')->throw()->json();
            $matches1819 = $matchesData1819['matches'];

            return view('index.prev-ucl', [
                // 'clubs1920' => $clubs1920,
                // 'matches1920' => $matches1920,
                'clubs1819' => $clubs1819,
                'matches1819' => $matches1819
            ]);
        } catch (\Exception $e) {

            return view('index.prev-epl', [
                'error' => 'Failed to retrieve data. Please try again later.'
            ]);
        }
    }
    public function previousEplSeasons()
    {
        try {
            // EPL 19-20 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/en.1.clubs.json')->throw()->json();
            $clubs1920 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/en.1.json')->throw()->json();
            $matches1920 = $matchesData['matches'];

            // EPL 18-19 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/en.1.clubs.json')->throw()->json();
            $clubs1819 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/en.1.json')->throw()->json();
            $matches1819 = $matchesData['matches'];

            return view('index.prev-epl', [
                'clubs1920' => $clubs1920,
                'matches1920' => $matches1920,
                'clubs1819' => $clubs1819,
                'matches1819' => $matches1819
            ]);
        } catch (\Exception $e) {

            return view('index.prev-epl', [
                'error' => 'Failed to retrieve data. Please try again later.'
            ]);
        }
    }

    public function previousLaLigaSeasons()
    {
        try {
            // La-Liga 19-20 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/es.1.clubs.json')->throw()->json();
            $clubs1920 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/es.1.json')->throw()->json();
            $matches1920 = $matchesData['matches'];

            // La-Liga 18-19 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/es.1.clubs.json')->throw()->json();
            $clubs1819 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/es.1.json')->throw()->json();
            $matches1819 = $matchesData['matches'];

            return view('index.prev-la-liga', [
                'clubs1920' => $clubs1920,
                'matches1920' => $matches1920,
                'clubs1819' => $clubs1819,
                'matches1819' => $matches1819
            ]);
        } catch (\Exception $e) {

            return view('index.prev-la-liga', [
                'error' => 'Failed to retrieve data. Please try again later.'
            ]);
        }
    }

    public function previousBundesSeasons()
    {
        try {
            // Bundes Liga 19-20 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/de.1.clubs.json')->throw()->json();
            $clubs1920 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/de.1.json')->throw()->json();
            $matches1920 = $matchesData['matches'];

            // Bundes Liga 18-19 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/de.1.clubs.json')->throw()->json();
            $clubs1819 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/de.1.json')->throw()->json();
            $matches1819 = $matchesData['matches'];

            return view('index.prev-bundes', [
                'clubs1920' => $clubs1920,
                'matches1920' => $matches1920,
                'clubs1819' => $clubs1819,
                'matches1819' => $matches1819
            ]);
        } catch (\Exception $e) {

            return view('index.prev-bundes', [
                'error' => 'Failed to retrieve data. Please try again later.'
            ]);
        }
    }

    public function previousSerieaSeasons()
    {
        try {
            // Ligue-1 19-20 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/it.1.clubs.json')->throw()->json();
            $clubs1920 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2019-20/it.1.json')->throw()->json();
            $matches1920 = $matchesData['matches'];

            // Ligue-1 18-19 Season
            $clubsData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/fr.1.clubs.json')->throw()->json();
            $clubs1819 = $clubsData['clubs'];
            $matchesData = Http::get('https://raw.githubusercontent.com/openfootball/football.json/master/2018-19/fr.1.json')->throw()->json();
            $matches1819 = $matchesData['matches'];

            return view('index.prev-seriea', [
                'clubs1920' => $clubs1920,
                'matches1920' => $matches1920,
                'clubs1819' => $clubs1819,
                'matches1819' => $matches1819
            ]);
        } catch (\Exception $e) {

            return view('index.prev-bundes', [
                'error' => 'Failed to retrieve data. Please try again later.'
            ]);
        }
    }
}
