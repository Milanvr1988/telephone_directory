<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function AllPost()
    {
        $posts = Post::all();
        return view('welcome',['posts'=>$posts]);
    }
    public function create()
    {
        return view("insert_contact");
    }
    public function store()
    {
        $allData = request()->validate(
            [
            "first_name"=>"required",
            "last_name"=>"required",
            "mob_number"=>"required",
            "home_number"=>"required",
            ]
            );

        $post = new Post();
        $post->first_name = request('first_name');
        $post->last_name = request('last_name');
        $post->mob_number = request('mob_number');
        $post->home_number = request('home_number');
        $post->save();

        return redirect('/')->with('Create','Contact is CREATED');

    }
    public function edit($id)
    {
        $post = Post::find($id);
        // var_dump($post_num);
        return view('edit_post',['post'=>$post] );
    }
    public function update($id)
    {       
        $post = Post::find($id);

        $allData = request()->validate(
        [
        "first_name"=>"required",
        "last_name"=>"required",
        "mob_number"=>"required",
        "home_number"=>"required",
        ]
        );
        $post->first_name = request('first_name');
        $post->last_name = request('last_name');
        $post->mob_number = request('mob_number');
        $post->home_number = request('home_number');
        $post->update();
            
        return redirect('/')->with('Update','Contact is UPDATED');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect("/")->with('Delete','Contact is DELETED');
    }
}
