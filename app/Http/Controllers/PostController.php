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

        if($title !== ''
            && $subtitle !== ''
            && $body !== ''){

            //autor desconhecido

            $post = Post::create([
                'title' => $title,
                'subtitle' => $subtitle,
                'body' => $body,
                'user_id' => 1
            ])->save();
            return redirect('http://localhost/blog-laravel/public/');
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
