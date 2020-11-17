<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTable extends Seeder
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

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('task')->insert([
                'conten' => $faker->name,
            ]);
        }
    }
}
