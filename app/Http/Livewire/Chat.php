<?php

namespace App\Http\Livewire;

use App\Events\Message;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Chat extends Component
{
    public $messages = null;
    public $textMessage;
    public $recipient_id = null;
    public $recipient_username;

//    Displaying message to other when post
//    protected $listeners = ['echo:message,Message' => 'getMessage({$this->recipient_id})'];
    protected $listeners = ['echo:message,Message' => 'echoFunction'];

    public function echoFunction()
    {
        $this->getMessage($this->recipient_id);
    }

    public function render()
    {
        $users = User::all()->except(Auth::id());
        $username = User::find(Auth::id())->username;
//        dd($username);
        return view('livewire.chat')->with([
            'users' => $users,
            'username' => $username
        ]);
    }

    public function getMessage($id)
    {
        $auth_id = Auth::id();
        $this->recipient_username = User::find($id)->username;

        $this->recipient_id = $id;
        $this->messages = DB::select('SELECT * FROM messages WHERE recipient_id = ? AND sender_id = ? OR recipient_id = ? AND sender_id = ?', [$auth_id, $id, $id, $auth_id]);

        $this->messages = json_decode(json_encode($this->messages), true);

//        foreach ($this->messages as $message)
//        {
//            dd($message['recipient_id']);
//        }
    }

    public function postMessage()
    {
//        dd($this->textMessage);
        $this->textMessage = trim($this->textMessage);

        if ($this->textMessage == '')
        {
            return;
        }
        $message = Messages::create([
           'sender_id' => Auth::id(),
           'recipient_id' => $this->recipient_id,
           'message' => $this->textMessage
        ]);

        event(new Message($this->textMessage, Auth::id(), $this->recipient_id));

        $this->textMessage = '';
//        event(new Message($message));
        $this->getMessage($this->recipient_id);
    }

}
