<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMovieController extends Controller
{
    private $movie_url;
    
    public function __construct(){
        $this->movie_url="https://data.sfgov.org/api/views/yitu-d5am/rows.json?accessType=DOWNLOAD";
    }

    public function loadMovieData(){
        $movie_url=\file_get_contents($this->movie_url);
        $movie_url=json_decode($movie_url);
        foreach($movie_url->data as $movie){
            $movies[]=[
                'movie_title'=>$movie[8],
                'year'=>$movie[9],
            ];
        }
        \DB::table('movies')->insert($movies);
        try {
            \DB::table('movies')->insert($movies);
            return response()->json([
                'message' => 'Successfully inserted',
            ], 201);
        } catch (\Exception $e) {
                return $e->getMessage();
        }
    }
}
