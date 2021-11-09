<?php

namespace Database\Seeders;

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
        DB::table('posts')->insert([
            'title' => 'mua dong',
            'content' => 'mua dong mua dong mua dong mua dong mua dong ',
            'thumbnail' => 'image path',
            'users_id' => '113',
            'postCategories_id' => '2',
            'like' => '1'
        ]);
    }
}
