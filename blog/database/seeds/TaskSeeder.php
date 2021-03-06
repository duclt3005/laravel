<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
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
        for ($i = 0; $i < 20; $i++) {
            DB::table('tasks')->insert([
                'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'status' => 0,
            ]);
        }
    }
}
