<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'title' => 'bai viet so 1',
            'body' => 'day la bai viet so 1 ',
            'user_id' =>1,
        ]);
        DB::table('posts')->insert([
            'title' => 'bai viet so 2',
            'body' => 'day la bai viet so 2 ',
            'user_id' =>2,
        ]);
    }
}
