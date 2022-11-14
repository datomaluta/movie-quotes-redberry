<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store(StoreUserRequest $request)
	{
		// $attributes = request()->validate([
		// 	'username'   => 'required|min:3',
		// 	'password'   => 'required',
		// ]);
		$attributes = $request->validated();

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'username'=> 'Your provided credentials not be verified.',
			]);
		}

		session()->regenerate();

		return redirect('/')->with('success', 'welcome');
	}

	public function destroy()
	{
		auth()->logout();

		return redirect('/')->with('success', 'Goodbye');
	}
}
