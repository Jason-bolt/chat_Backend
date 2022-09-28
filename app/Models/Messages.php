<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'recipient_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
