<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMovieLocationController extends Controller
{
    private $movie_url;
    
    public function __construct(){
        $this->movie_url="https://data.sfgov.org/api/views/yitu-d5am/rows.json?accessType=DOWNLOAD";
    }
    
    public function loadMovieLocationData(){
        $movie_url=\file_get_contents($this->movie_url);
        $movie_url=json_decode($movie_url);
        foreach($movie_url->data as $key=>$movie){
            $title = $movie[8];
            if(is_null($movie[10])){
                $location = 'San Francisco';
            }else{
                $location = $movie[10];
            }
            $latitude = (float) 37.4319;
            $longitude = (float) -122.1228;
            $radius = rand(1,10); // in miles

            $lat = $latitude - ($radius / 69);
            $lng = $longitude - $radius / abs(cos(deg2rad($latitude)) * 69);
            if($movie[11]){
				$fun_fact = $movie[11];
            }else{
				$fun_fact = 'No Record';
            }
            $movies_location[]=[
                'movie_id'=>$key+1,
                'location'=>$location,
                'fun_facts'=>$fun_fact,
                'lat'=>$lat,
                'lng'=>$lng,
            ];
        }
        try {
        \DB::table('movie_location')->insert($movies_location);
        return response()->json([
            'message' => 'Successfully inserted',
        ], 201);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
