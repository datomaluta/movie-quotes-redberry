<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quotes', function (Blueprint $table) {
			$table->foreignId('movie_id')->nullable()->constrained()->cascadeOnDelete();
		});

		Schema::enableForeignKeyConstraints();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quotes', function (Blueprint $table) {
			$table->foreignId('movie_id');
		});

		Schema::enableForeignKeyConstraints();
	}
};
