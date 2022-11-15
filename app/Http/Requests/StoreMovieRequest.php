<?php

namespace App\Http\Requests;

use App\Models\Movie;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'name'=> ['required', 'min:3', Rule::unique('movies', 'name')],
			'slug'=> ['required', Rule::unique('movies', 'slug')],
		];
	}
}
