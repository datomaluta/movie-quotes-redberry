<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(1)->create();

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		Movie::create([
			'name'=> 'Hot Dog',
			'slug'=> 'hot-dog',
		]);

		Movie::create([
			'name'=> 'Sherekilebi',
			'slug'=> 'sherekilebi',
		]);

		Movie::create([
			'name'=> 'An extraordinary exhibition',
			'slug'=> 'an-extraordinary-exshibition',
		]);

		Movie::create([
			'name'=> 'Blue mountains',
			'slug'=> 'blue-mountains',
		]);

		Quote::create([
			'movie_id' => '1',
			'thumbnail'=> 'thumbnails/zaxarichi.png',
			'text'     => 'Remember bro, a woman is not a human being.',
		]);

		Quote::create([
			'movie_id' => '1',
			'thumbnail'=> 'thumbnails/kalduna.png',
			'text'     => 'You will add 100 on top of this 50 and bring it to me tomorrow.',
		]);

		Quote::create([
			'movie_id' => '2',
			'thumbnail'=> 'thumbnails/gafrindnen.png',
			'text'     => 'I told you they will fly away, you butterfly with a tie.',
		]);

		Quote::create([
			'movie_id' => '2',
			'thumbnail'=> 'thumbnails/kaisaqme.png',
			'text'     => 'If you are going to a good cause, take me too.',
		]);

		Quote::create([
			'movie_id' => '3',
			'thumbnail'=> 'thumbnails/egoisti.png',
			'text'     => 'I am selfish, not drunk!',
		]);

		Quote::create([
			'movie_id' => '3',
			'thumbnail'=> 'thumbnails/brma.png',
			'text'     => 'Why does not it have eyes, is it blind?',
		]);

		Quote::create([
			'movie_id' => '4',
			'thumbnail'=> 'thumbnails/tankisti.png',
			'text'     => 'I am not afraid of anything, I was a tank driver before the war!',
		]);

		Quote::create([
			'movie_id' => '4',
			'thumbnail'=> 'thumbnails/patarakaci.png',
			'text'     => 'I am a small man, I will say what I am told',
		]);
	}
}
