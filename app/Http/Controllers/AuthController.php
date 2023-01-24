<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register_action(Request $r){
        $all = User::all()->where('email', '=', $r->email);
        if($all->count() !== 1){
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)
            ]);
            return redirect('http://localhost/blog-laravel/public/');
        }
        return view('register', ['error' => 'O email informado já está em uso.']);
    }

    public function login_action(Request $r){
        $validator = $r->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($validator)){
            return redirect('http://localhost/blog-laravel/public/');
        } else {
            return view('login', ['error' => 'Email e/ou senha incorretos.']);
        }
    }
}
