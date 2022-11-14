<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMovieRequest extends FormRequest
{
	public function rules()
	{
		// dd(request()->route('movie')->id);
		// dd($movie->id);
		return [
			'name'=> ['required', Rule::unique('movies', 'name')->ignore(request()->route('movie')->id)],
			'slug'=> ['required', Rule::unique('movies', 'slug')->ignore(request()->route('movie')->id)],
		];
	}
}
