<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->with('user')->get();

        return view('admin.message.index')->with(compact('messages'));
    }

    public function create(Message $message)
    {
        $userlist = User::getUserList();

        return view('admin.message.create')->with(compact('message', 'userlist'));
    }
}
