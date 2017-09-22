<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function myProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('Users.profile',compact('user'));
    }
}
