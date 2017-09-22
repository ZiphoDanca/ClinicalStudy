<?php

namespace App\Http\Controllers;
use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $newMessage = new Message();
        $newMessage->name = $request['name'];
        $newMessage->email = $request['email'];
        $newMessage->cellphone = $request['cellphone'];
        $newMessage->message = $request['message'];
        $newMessage->save();

        return Redirect('/');
    }
    public function getMessages()
    {
        $messages = Message::all();

        return $messages;
    }
}
