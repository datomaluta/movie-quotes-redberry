<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Validation\Rule;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', ['movies'=>Movie::all()]);
	}

	public function create()
	{
		return view('admin.movies.create');
	}

	public function store()
	{
		// dd(request()->all());
		$attributes = request()->validate([
			'name'=> ['required', Rule::unique('movies', 'name')],
			'slug'=> ['required', Rule::unique('movies', 'slug')],
		]);

		Movie::create($attributes);

		return redirect('/admin/movies');
	}

	public function edit(Movie $movie)
	{
		return view('admin.movies.edit', ['movie'=>$movie]);
	}

	public function update(Movie $movie)
	{
		$attributes = request()->validate([
			'name'=> ['required', Rule::unique('movies', 'name')->ignore($movie->id)],
			'slug'=> ['required', Rule::unique('movies', 'slug')->ignore($movie->id)],
		]);

		$movie->update($attributes);

		return redirect('/admin/movies');
	}
}
