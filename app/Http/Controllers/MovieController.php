<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    public function index()
    {
        $client = new Client();
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1ZjY0ZjkyMzQ3MGMyODA1OWE5OTUzYjM2ZWEzYzlmZSIsIm5iZiI6MTcxOTM2OTUxNy40NTA4MzMsInN1YiI6IjY2NmNmNDdmZjUyYzE3YTNkMjk5OTE1NiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.GEpGSY1XrpbSfIZbyBui_cffKOiIn4m8eqUPoCv4y_4';
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=1&sort_by=popularity.desc', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ]
        ]);

        $movies = json_decode($response->getBody()->getContents())->results;

        return view('movies.index', compact('movies'));
    }
}
