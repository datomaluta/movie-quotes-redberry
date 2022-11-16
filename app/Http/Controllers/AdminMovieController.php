<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', ['movies'=>Movie::paginate(9)]);
	}

	public function store(StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		Movie::create($attributes);

		return redirect(route('admin.movies.index', app()->getLocale()));
	}

	public function edit($language, Movie $movie)
	{
		return view('admin.movies.edit', ['movie'=>$movie]);
	}

	public function update($language, Movie $movie, UpdateMovieRequest $request)
	{
		$attributes = $request->validated();

		$movie->update($attributes);

		return redirect(route('admin.movies.index', app()->getLocale()));
	}

	public function destroy($language, Movie $movie)
	{
		$movie->delete();

		return redirect(route('admin.movies.index', app()->getLocale()));
	}
}
