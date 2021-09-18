<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function room()
    {
        return $this->hasOne(ChatRoom::class);
    }
}
