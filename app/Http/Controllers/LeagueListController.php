<?php

namespace App\Http\Controllers;

use App\Models\BundesLigaClubs;
use App\Models\EplClubs;
use App\Models\LaLigaClubs;
use App\Models\SeriaAClubs;
use Illuminate\Http\Request;

class LeagueListController extends Controller
{
    public function leagueListPage()
    {
        return view('index.league-list-page');
    }

    public function leagueListPagePrev()
    {
        return view('index.league-list-page-prev');
    }


    public function getAllClubs()
    {
        $laLigaClubs = LaLigaClubs::all()->map(function ($club) {
            $club['model_type'] = 'LaLiga';
            return $club;
        })->toArray();
        $eplClubs = EplClubs::all()->map(function ($club) {
            $club['model_type'] = 'EPL';
            return $club;
        })->toArray();
        $bundesLigaClubs = BundesLigaClubs::all()->map(function ($club) {
            $club['model_type'] = 'BundesLiga';
            return $club;
        })->toArray();
        $seriaAClubs = SeriaAClubs::all()->map(function ($club) {
            $club['model_type'] = 'SeriaA';
            return $club;
        })->toArray();

        // Combine arrays
        $allClubs = array_merge($laLigaClubs, $eplClubs,$bundesLigaClubs,$seriaAClubs);

        return $allClubs; // This is an array of all clubs with model_type included
    }

    public function compareClubs()
    {
        $alls = $this->getAllClubs();
        return view('laliga.compare-clubs', compact('alls'));
    }

    public function compareClubAction(Request $request)
    {
        $alls = $this->getAllClubs();

        // Parse the club identifiers
        $club1Details = explode('-', $request->input('club1'));
        $club2Details = explode('-', $request->input('club2'));

        // Ensure the parsing returns enough parts
        if (count($club1Details) < 2 || count($club2Details) < 2) {
            return back()->withError('Invalid club selection. Please try again.');
        }

        $club1Id = $club1Details[0];
        $club1Model = $club1Details[1];
        $club2Id = $club2Details[0];
        $club2Model = $club2Details[1];

        $club1 = $this->findClub($alls, $club1Id, $club1Model);
        $club2 = $this->findClub($alls, $club2Id, $club2Model);

        if (!$club1 || !$club2) {
            return back()->withError('One or both of the selected clubs could not be found.');
        }

        return view('laliga.compare-clubs', compact('alls', 'club1', 'club2'));
    }

    private function findClub($clubs, $id, $modelType)
    {
        foreach ($clubs as $club) {
            if ($club['id'] == $id && $club['model_type'] === $modelType) {
                return $club;
            }
        }
        return null;  // Return null if no club is found
    }
}
