<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function create()
    {
        return view('leagues.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'league_logo' => 'required|mimes:png,jpg,jpeg|max:10000'
        ]);

        $leaguelogo = time() . '_league.' . $request->league_logo->extension();
        $request->league_logo->move(public_path('league_storage'), $leaguelogo);

        $league = new League();
        $league->name = $request->name;
        $league->league_logo = $leaguelogo;

        // Save the league to get the ID
        $league->save();

        // Now you can access the ID
        return redirect()->route('homepage.admin-dashboard', $league->id)
            ->with('message', 'League created successfully. Now add clubs to the league.');
    }

    // Show the form for editing the specified league
    public function edit(League $league)
    {
        return view('leagues.edit', compact('league'));
    }

    // Update the specified league in storage
    public function update(Request $request, League $league)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'league_logo' => 'nullable|mimes:png,jpg,jpeg|max:10000',  // assuming you have a file upload
        ]);

        if ($request->hasFile('league_logo')) {
            $leaguelogo = time() . '_leagueNew.' . $request->league_logo->extension();
            $request->league_logo->move(public_path('league_storage'), $leaguelogo);
            $league->league_logo = $leaguelogo;
        }

        $league->update($request->only('name'));

        return redirect()->route('homepage.admin-dashboard')->with('message', 'League updated successfully.');
    }

    // Remove the specified league from storage
    public function destroy(League $league)
    {
        $league->delete();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'League deleted successfully.');
    }
}
