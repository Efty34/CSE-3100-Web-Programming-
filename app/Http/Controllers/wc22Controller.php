<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class wc22Controller extends Controller
{
    public function wc22GroupStage()
    {
        $data = Http::get('https://world-cup.codsfli.com/points.php')->json();
        return view('worldcup22.group-stage-point-table', ['datas' => $data]);
        
    }
    public function wc22ResultTable(){
        $filePath = storage_path('app/fifa-world-cup.json');

        if (!file_exists($filePath)) {
            abort(404, 'JSON file not found.');
        }

        $jsonContents = file_get_contents($filePath);

        $jsonData = json_decode($jsonContents, true);

        if ($jsonData === null) {
            abort(500, 'Error decoding JSON data.');
        }

        return view('worldcup22.result-table', ['jsonData' => $jsonData]);
    }
}
