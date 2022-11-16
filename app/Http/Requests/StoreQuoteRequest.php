<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuoteRequest extends FormRequest
{
	public function rules()
	{
		$rules = [
			'text'       => 'required',
			'textinka'=>'required',
			'thumbnail'  => 'image',
			'movie_id'   => ['required', Rule::exists('movies', 'id')],
		];
		if (request()->getMethod() == 'POST')
		{
			$rules['thumbnail'] = 'image|' . 'required';
		}

		return $rules;
	}
}
