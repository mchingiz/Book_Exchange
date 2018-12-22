<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function profile(User $user){

        return view('user.profile', compact('user'));
    }

    public function edit(User $user){

        return view('user.edit_profile', compact('user'));
    }

    public function chat(User $user){

        return view('chat', compact('user'));
    }
}
