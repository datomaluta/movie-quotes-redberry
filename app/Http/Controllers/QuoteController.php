<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
	public function index()
	{
		$quote = Quote::inRandomOrder()->limit(1)->first();
		return view('quote.index', ['quote'=>$quote]);
	}
}
