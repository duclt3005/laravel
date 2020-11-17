<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'name' => $faker->word,
                'email'=> $faker->freeEmail,
                'password'=> Hash::make('123456'),
            ]);
        }
    }
}
