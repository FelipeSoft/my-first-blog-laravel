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
}
