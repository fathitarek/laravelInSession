<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            # code...
        
        DB::table('posts')->insert([
            'post' => str_random(10),           
        ]);
        //
    }
    }
}
