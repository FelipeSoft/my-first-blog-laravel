<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
    }

    public function delete(Request $r){
        $post = Post::findOrFail($r->id);
        $post->delete();
        return redirect()->to(url()->previous());
    }

    public function edit(Request $r){
        $post = Post::find($r->id);
        return view('edit', ['post' => $post]);
    }

    public function edit_action(Request $r){
        $post = Post::where('id', '=', $r->id)
        ->update([
            'title' => $r->title,
            'subtitle' => $r->subtitle,
            'body' => $r->body
        ]);
        return redirect()->to(url('http://localhost/blog-laravel/public/management'));
    }
}
