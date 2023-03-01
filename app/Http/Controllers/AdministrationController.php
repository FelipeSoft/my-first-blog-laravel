<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;

class AdministrationController extends Controller
{
    public function load(Request $r){
        $data = Post::all();
        $posts = [];

        foreach ($data as $d) {
            $new_data = [
                'id' => $d['id'],
                'title' => $d['title'],
                'subtitle' => $d['subtitle'],
                'author' => $d->user->name
            ];
            $posts[] = $new_data;
        }
        
        return view('management', ['posts' => array_reverse($posts)]);
<<<<<<< HEAD
    }

    public function update(Request $r){
        $currentPost = Post::find($r->id);
        return view('update', ['post' => $currentPost]);
    }
    public function update_action(Request $r){
        $post = Post::find($r->input('id'))->update([
            'title' => $r->input('title'),
            'subtitle' => $r->input('subtitle'),
            'body' => $r->input('body')
        ]);
        return Redirect::to('http://localhost/blog-laravel/public/management');
    }
    public function delete(Request $r){
        $post = Post::destroy($r->id);
        return Redirect::to('http://localhost/blog-laravel/public/management');
=======
>>>>>>> ca44154da7fec7c11eaaa8e8652ddf4b0958c186
    }
}
