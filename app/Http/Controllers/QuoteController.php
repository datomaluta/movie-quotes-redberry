<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
	public function index()
	{
		$quote = Quote::inRandomOrder()->first();
		return view('quote.index', ['quote'=>$quote]);
	}
}
