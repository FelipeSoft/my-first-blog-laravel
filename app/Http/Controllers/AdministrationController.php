<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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

    public function users(Request $r){
        $data = User::all();
        $users = [];

        foreach($data as $d){
            $new_data = [
                'id' => $d['id'],
                'name' => $d['name'],
                'email' => $d['email'],
                'password' => $d['password'],
                'is_admin' => $d['is_admin'] === 0 ? 'Comum' : 'Administrador'
            ];
            $users[] = $new_data;
        }

        return view('users', ['users' => $users]);
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
    }

    public function update_user(Request $r){
        $currentUser = User::find($r->id);
        return view('update_user', ['user' => $currentUser]);
    }
    public function update_user_action(Request $r){
        $user = User::where('id', '=', $r->input('id'))->update([
            'name' => $r->input('name'),
            'email' => $r->input('email'),
            'is_admin' => $r->input('is_admin') === 'Administrador' ? 1 : 0,
        ]);
        return Redirect::to('http://localhost/blog-laravel/public/users');
    }
    public function delete_user(Request $r){
        $user = User::destroy($r->id);
        return Redirect::to('http://localhost/blog-laravel/public/users');
    }
}
