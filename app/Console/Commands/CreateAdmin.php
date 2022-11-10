<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create-admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create admin with artisan';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$name = $this->ask('Please, Input your username?');
		$password = $this->ask('Please, Input your password?');

		$attributes = ['username'=>$name, 'password'=>bcrypt($password)];

		User::create($attributes);

		$this->info('Admin Created Successfully');

		return Command::SUCCESS;
	}
}
