<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'content' => 'xin chao cac ban',
            'posts_id' => '1',
            'users_id' => '108',
            'path' => '1',
            'like' => '1'
        ]);
    }
}
