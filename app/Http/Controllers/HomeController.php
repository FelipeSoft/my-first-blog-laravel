<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $data = [];
        $posts = Post::all();

        for($i = 0; $i < 3; $i++){
            $random = rand(1, $posts->count());
            $info = $posts->find($random);

            if($info !== null){
                $newInfo = [
                    'id' => $info['id'],
                    'title' => $info['title'],
                    'subtitle' => $info['subtitle'],
                    'body' => $info['body'],
                    'updated_at' => $info['updated_at'],
                    'user_name' => $info->user->name,
                ];
            }

            $data[] = $newInfo;
        }
        return view('home', ['data' => $data]);
    }

    public function new(Request $r){
        $new = Post::find($r->id);
        return view('current-new', ['new' => $new]);
    }

    public function posts(Request $r){
        $posts = Post::all();
        
        foreach($posts as $p){
            $p['user_id'] = $p->user;
        }
        return $posts;
    }
}
