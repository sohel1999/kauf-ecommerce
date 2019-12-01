<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        \App\Models\User::create([
            'name' => $faker->name,
            'email' =>'admin@gmail.com',
            'password'=>bcrypt('admin')

        ]);
    }
}
