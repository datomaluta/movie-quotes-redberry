<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        $quote = Quote::inRandomOrder()->limit(1)->first();
        return view('quotes.index',['quote'=>$quote]);
    }
}
