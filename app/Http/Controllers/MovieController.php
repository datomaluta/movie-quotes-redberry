<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Movie $movie){
        // return 'hello world';
        // ddd($movie->quotes);
        $quotes=$movie->quotes;
        return view("movie.index", ['movie'=>$movie,'quotes'=>$quotes]);
    }
}
