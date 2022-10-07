<?php

namespace App\Http\Livewire;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Chat extends Component
{
    public $messages = null;
    public $text;

    public function render()
    {
        $users = User::all()->except(Auth::id());
        return view('livewire.chat')->with([
            'users' => $users
        ]);
    }

    public function getMessage($id)
    {
        $auth_id = Auth::id();

        $this->messages = DB::select('SELECT * FROM messages WHERE recipient_id = ? AND sender_id = ? OR recipient_id = ? AND sender_id = ?', [$auth_id, $id, $id, $auth_id]);
    }

    public function postMessage()
    {

    }

}
