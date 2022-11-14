<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', ['movies'=>Movie::simplePaginate(9)]);
	}

	public function create()
	{
		return view('admin.movies.create');
	}

	public function store(StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		Movie::create($attributes);

		return redirect('/admin/movies');
	}

	public function edit(Movie $movie)
	{
		return view('admin.movies.edit', ['movie'=>$movie]);
	}

	public function update(Movie $movie, UpdateMovieRequest $request)
	{
		$attributes = $request->validated();

		$movie->update($attributes);

		return redirect('/admin/movies');
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();

		return redirect('/admin/movies');
	}
}
