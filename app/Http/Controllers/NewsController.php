<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsPage()
    {
        $filePath = storage_path('app/news.json');

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'JSON file not found.');
        }

        // Read the contents of the JSON file
        $jsonContents = file_get_contents($filePath);

        // Parse the JSON data
        $jsonData = json_decode($jsonContents, true);

        if ($jsonData === null) {
            abort(500, 'Error decoding JSON data.');
        }

        // Pass the parsed JSON data to a view
        return view('index.news-page', ['jsonData' => $jsonData]);
    }
}
