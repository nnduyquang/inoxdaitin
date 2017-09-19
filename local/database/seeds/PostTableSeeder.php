<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name' => 'gioithieu-contents',
                'description' => 'Bài Viết Giới Thiệu',
                'order'=>1,
                'user_id' => 1
            ]

        ];
        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
