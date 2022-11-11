<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('admin.quotes.index', ['quotes'=>Quote::all()]);
	}

	public function create()
	{
		return view('admin.quotes.create');
	}
}
