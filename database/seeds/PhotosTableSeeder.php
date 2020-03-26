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
          for ($i=0; $i < 5; $i++) {
            $newPhoto = new Photo;
            $newPhoto->img_title = $faker->name;
            $newPhoto->img_path = 'https://picsum.photos/id/'.rand(1, 100).'/320/240';
            $newPhoto->user_id = $user->id;
            $newPhoto->save();
          }
        }
    }
}
