<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChatController extends Controller
{
    public function viewChat(User $user){
        $current_user_id = \Auth::user()->id;

        if($user->id == $current_user_id){
            echo "You can not have messages with yourself.";
            return;
        }

        return view('chat',compact('user','current_user_id'));
    }


}
