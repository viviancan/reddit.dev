<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	$posts = [];

    	$faker = Faker\Factory::create();

    	for ($i = 1; $i <= 10; $i++)
    	{
    		$posts[] = [

    			'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
    			'url'=> $faker->url,
    			'content'=> $faker->text,
    			'created_by'=>rand(0,10),
    			'created_at'=> $faker->dateTime(),
    			'updated_at'=> $faker->dateTime()
    		];
    	}

    	DB::table('posts')->insert($posts);
    }
}
