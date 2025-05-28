<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('index', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->body = $request->body;
        $message->save();
        return redirect('/messages');
    }

    public function destroyAll()
    {
        Message::truncate();
        return redirect('/messages');
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        if ($message) {
            $message->delete();
        }
        return redirect('/messages');
    }
}
