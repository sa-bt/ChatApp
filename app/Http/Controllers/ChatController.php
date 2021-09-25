<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }
    public function rooms()
    {
        return ChatRoom::all();
    }

    public function messages(Request $request, $roomId)
    {
        return ChatMessage::query()->where('chat_room_id', $roomId)
                          ->with('user')
                          ->orderBy('created_at', 'desc')
                          ->get();
    }

    public function newMessage(Request $request,$roomId)
    {
        $newMessage=new ChatMessage();
        $newMessage->user_id=Auth::id();
        $newMessage->chat_room_id=$roomId;
        $newMessage->message=$request->message;
        $newMessage->save();
        return$newMessage;
    }
}
