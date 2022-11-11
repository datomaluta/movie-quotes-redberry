<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Validation\Rule;

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

	public function store()
	{
		// dd(request()->all());
		$path = request()->file('thumbnail')->store('thumbnails');
		// dd($path);

		$attributes = request()->validate([
			'text'      => 'required',
			'thumbnail'  => 'required|image',
			// 'slug'       => ['required', Rule::unique('posts', 'slug')],
			// 'excerpt'    => 'required',
			// 'body'       => 'required',
			'movie_id'=> ['required', Rule::exists('movies', 'id')],
		]);

		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

		Quote::create($attributes);

		return redirect('/admin/quotes');
	}
}
