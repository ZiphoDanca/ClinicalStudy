<?php

namespace App\Http\Controllers;
use App\Message;
use Yajra\DataTables\DataTables;
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
    public function allMessages()
    {
        return view('Messages.index');
    }
    public function getMessages()
    {
        $messages = Message::all();

        return Datatables::of($messages)
            ->make(true);
    }
}
