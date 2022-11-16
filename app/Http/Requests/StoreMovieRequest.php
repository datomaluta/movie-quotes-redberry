<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'name'    => ['required', 'min:3', Rule::unique('movies', 'name')],
			'nameinka'=> ['required'],
			'slug'    => ['required', Rule::unique('movies', 'slug')],
		];
	}
}
