<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new User();
        $post->name = "Milan";
        $post->email = "vrmilan88@yahoo.com";
        $post->password = '123';
        $post->save();
    }
}
