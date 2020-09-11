<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewLogin() {
        return view('login');
    }

    public function welcome(Request $request) {
        $usuario = [];
        $usuario['email'] = $request->email;
        $usuario['password'] = $request->password;
        $user = User::find(1);
        $user = new User($usuario);
        $user->save();
        return view('welcome', compact('usuario'));
    }
}
