<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client; // Importez la classe Client depuis Guzzle

class MovieController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();

       $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?language=en-US', [
          'headers' => [
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMjJkNjNjZGRjMDY2ZDk5ZWQzZTgwNmQzMjY3MThjYSIsInN1YiI6IjYyNGVhNTRhYjc2Y2JiMDA2ODIzODc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.zuuBq1c63XpADl8SQ_c62hezeus7VibE1w5Da5UdYyo',
            'accept' => 'application/json',
          ],
        ]);
        
        $content = $response->getBody() ->getContents();
        $data =json_decode($content, true);
        return view('welcome')->with ('movies', $data['results']);
        
    }
}



