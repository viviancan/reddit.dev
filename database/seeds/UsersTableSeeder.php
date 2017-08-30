<?php

use Illuminate\Database\Seeder;

// require_once '/vendor/fzaninotto/Faker/src/autoload.php';

use Faker\Factory;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $users = [];

    	// $faker = Faker\Factory::create();

    	// for ($i = 1; $i <= 10; $i++)
    	// {
    	// 	$users[] = [

    	// 		'name'=> $faker->name,
    	// 		'email'=> $faker->email,
    	// 		'password'=> Hash::make(env('USER_PASSWORD')),
    	// 		'created_at'=> $faker->dateTime(),
    	// 		'updated_at'=> $faker->dateTime()
    	// 	];
    	// }

    	// DB::table('users')->insert($users);



    	$faker = Faker\Factory::create();

		for($i=0; $i<=10; $i++){
			$user = new User();
			$user->name = $faker->name;
			$user->email = $faker->email;
			$user->password = Hash::make(env('USER_PASSWORD'));
			// $user->created_at = $faker->dateTime();
			// $user->updated_at = $faker->dateTime();
			$user->save();
		}

    }
}
