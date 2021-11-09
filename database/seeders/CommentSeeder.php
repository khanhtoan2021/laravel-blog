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
            'content' => 'conment cua user khac',
            'posts_id' => '3',
            'users_id' => '114',
            'path' => '1',
            'like' => '1'
        ]);
    }
}
