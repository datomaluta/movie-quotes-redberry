<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('admin.quotes.index', ['quotes'=>Quote::simplePaginate(8)]);
	}

	public function create()
	{
		return view('admin.quotes.create');
	}

	public function store()
	{
		// $path = request()->file('thumbnail')->store('thumbnails');

		$attributes = request()->validate([
			'text'       => 'required',
			'thumbnail'  => 'required|image',
			'movie_id'   => ['required', Rule::exists('movies', 'id')],
		]);

		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

		Quote::create($attributes);

		return redirect('/admin/quotes');
	}

	public function edit(Quote $quote)
	{
		return view('admin.quotes.edit', ['quote'=>$quote]);
	}

	public function update(Quote $quote)
	{
		$attributes = request()->validate([
			'text'       => 'required',
			'thumbnail'  => 'image',
			'movie_id'   => ['required', Rule::exists('movies', 'id')],
		]);

		if (isset($attributes['thumbnail']))
		{
			$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
		}

		$quote->update($attributes);

		return redirect('/admin/quotes');
	}
}
