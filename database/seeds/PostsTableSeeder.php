<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Post;
use App\User;



class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	// $posts = [];

    	// $faker = Faker\Factory::create();

    	// for ($i = 1; $i <= 10; $i++)
    	// {
    	// 	$posts[] = [

    	// 		'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
    	// 		'url'=> $faker->url,
    	// 		'content'=> $faker->text,
    	// 		'created_by'=>rand(1,10),
    	// 		'created_at'=> $faker->dateTime(),
    	// 		'updated_at'=> $faker->dateTime()
    	// 	];
    	// }

    	// DB::table('posts')->insert($posts);

    	$faker = Faker\Factory::create();

		for($i=0; $i<=50; $i++){
			$post = new Post();
			$post->title = $faker->catchPhrase();
			$post->url = $faker->url;
			$post->content = $faker->bs;
			$post->created_by = User::all()->random()->id;
			// $post->created_at = $faker->dateTime();
			// $post->updated_at = $faker->dateTime();
			$post->save();
		}
    	

    }
}

























