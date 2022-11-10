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
		// \App\Models\User::factory(10)->create();

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		Movie::create([
			'name'=> 'Hot Dog',
		]);

		Movie::create([
			'name'=> 'Sherekilebi',
		]);

		Movie::create([
			'name'=> 'An extraordinary exhibition',
		]);

		Movie::create([
			'name'=> 'Blue mountains',
		]);

		Quote::create([
			'movie_id' => '1',
			'thumbnail'=> 'zaxarichi.png',
			'text'     => 'Remember bro, a woman is not a human being.',
		]);

		Quote::create([
			'movie_id' => '1',
			'thumbnail'=> 'kalduna.png',
			'text'     => 'You will add 100 on top of this 50 and bring it to me tomorrow.',
		]);

		Quote::create([
			'movie_id' => '2',
			'thumbnail'=> 'gafrindnen.png',
			'text'     => 'I told you they will fly away, you butterfly with a tie.',
		]);

		Quote::create([
			'movie_id' => '2',
			'thumbnail'=> 'kaisaqme.png',
			'text'     => 'If you are going to a good cause, take me too.',
		]);

		Quote::create([
			'movie_id' => '3',
			'thumbnail'=> 'egoisti.png',
			'text'     => 'I am selfish, not drunk!',
		]);

		Quote::create([
			'movie_id' => '3',
			'thumbnail'=> 'brma.png',
			'text'     => 'Why does not it have eyes, is it blind?',
		]);

		Quote::create([
			'movie_id' => '4',
			'thumbnail'=> 'tankisti.png',
			'text'     => 'I am not afraid of anything, I was a tank driver before the war!',
		]);

		Quote::create([
			'movie_id' => '4',
			'thumbnail'=> 'patarakaci.png',
			'text'     => 'I am a small man, I will say what I am told',
		]);
	}
}
