<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;

class Movieslocation extends Model
{
    // use HasFactory;

    protected $table = 'movie_location';
    protected $guarded = ['id'];

    public function movies(){
        return $this->belongsTo(Movies::class,'movie_id');
    }
}
