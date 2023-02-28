<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function publish_action(Request $r){
        $title = $r->input('title');
        $subtitle = $r->input('subtitle');
        $body = $r->input('body');

        if($title !== '' && 
           $subtitle !== '' && 
           $body !== ''
        ){

            $post = Post::create([
                'title' => $title,
                'subtitle' => $subtitle,
                'body' => $body,
                //lembrar de criar o usuário de ID 11
                'user_id' => 11
            ])->save();

            return redirect('/');
        }
    }

    public function search_action(Request $r){
        $topic = Post::where('title', 'LIKE', "%{$r->input('topic')}%")
                ->orWhere('subtitle', 'LIKE', "%{$r->input('topic')}%")
                ->orderBy('id', 'DESC')
                ->get();

        return view('result', [
            'topic' => $topic,
            'typed' => $r->input('topic')
        ]);
    }
}
