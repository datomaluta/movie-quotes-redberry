<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function store(StoreUserRequest $request)
	{
		$attributes = $request->validated();

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'username'=> 'Your provided credentials not be verified.',
			]);
		}

		session()->regenerate();

		return redirect(route('admin.index'));
	}

	public function destroy()
	{
		auth()->logout();

		return redirect(route('index'));
	}
}
