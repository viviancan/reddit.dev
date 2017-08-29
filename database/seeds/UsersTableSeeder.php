<?php

use Illuminate\Database\Seeder;

// require_once '/vendor/fzaninotto/Faker/src/autoload.php';

use Faker\Factory;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [];

    	$faker = Faker\Factory::create();

    	for ($i = 1; $i <= 10; $i++)
    	{
    		$users[] = [

    			'name'=> $faker->name,
    			'email'=> $faker->email,
    			'password'=> Hash::make('password123'),
    			'created_at'=> $faker->dateTime(),
    			'updated_at'=> $faker->dateTime()
    		];
    	}

    	DB::table('users')->insert($users);

    }
}
