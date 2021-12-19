<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->first_name = "Milan";
        $post->last_name = "Nikolic";
        $post->mob_number = '069/453-93-90';
        $post->home_number = '017/417-213';
        $post->save();
    }
}
