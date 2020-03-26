<?php

use Illuminate\Database\Seeder;
use App\Photo;
use App\User;
use Faker\Generator as Faker;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
          $newPhoto = new Photo;
          $newPhoto->img_title = $faker->name;
          $newPhoto->img_path = $faker->imageUrl($width = 320, $height = 240);
          $newPhoto->user_id = $user->id;
          $newPhoto->save();
        }
    }
}
