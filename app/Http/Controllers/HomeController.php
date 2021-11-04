<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movieslocation;
use App\Models\Movies;

class HomeController extends Controller
{
    private $movie_url;
    
    public function __construct(){
        $this->movie_url="https://data.sfgov.org/api/views/yitu-d5am/rows.json?accessType=DOWNLOAD";
    }

    public function index(Request $request){
        $movie_input=$request->movie;
        $data=Movieslocation::with('movies')->whereHas('movies', function($q) use($movie_input){
            $q->where('movie_title', $movie_input);
        })->get();
        foreach($data as $data){
            $result[] =['location'=> $data->location, 'fun_fact'=>$data->fun_facts, 'lat'=>$data->lat, 'lng'=>$data->lng];
        }
        return $result;
    }


}
