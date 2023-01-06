<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $data = [];
        $posts = Post::all();

        if(date("Hi") > '0000'){
            for($i = 0; $i < 3; $i++){
                $random = rand(1, $posts->count());
                $data[] = $posts->find($random);
            }
        }
        return view('home', ['data' => $data]);
    }

    public function search_action(Request $r){
        $topic = Post::where('title', 'LIKE', "%{$r->input('topic')}%")
                ->orWhere('subtitle', 'LIKE', "%{$r->input('topic')}%")
                ->get();

        return view('result', [
            'topic' => $topic,
            'typed' => $r->input('topic')
        ]);
    }

    public function posts(Request $r){
        $posts = Post::all();
        foreach($posts as $p){
            $p['user_id'] = $p->user;
        }
        return $posts;
    }
}
