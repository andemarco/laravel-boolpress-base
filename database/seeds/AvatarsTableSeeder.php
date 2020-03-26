<?php

use Illuminate\Database\Seeder;
use App\Avatar;
use App\User;
use Faker\Generator as Faker;

class AvatarsTableSeeder extends Seeder
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
        $newAvatar = new Avatar;
        $newAvatar->avatar_path = 'https://i.pravatar.cc/100';
        $newAvatar->avatar_name = $faker->name;
        $newAvatar->user_id = $user->id;
        $newAvatar->save();
      }
    }
}
