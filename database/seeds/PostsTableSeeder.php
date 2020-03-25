<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 3; $i++) {
        $post = new Post();
        $post->title = $faker->realText($maxNbChars = 20, $indexSize = 1);
        $post->author = $faker->name;
        $post->description = $faker->realText($maxNbChars = 400, $indexSize = 2);
        $post->img = $faker->imageUrl();

        $post->save();
      }
    }
}
