<?php

namespace App\Events;

use App\Models\Messages;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Messages
     */
    public $message;
    public $sender_id;
    public $recipient_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $sender_id, $recipient_id)
    {
        $this->message = $message;
        $this->sender_id = $sender_id;
        $this->recipient_id = $recipient_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('message');
    }

//    public function broadcastAs()
//    {
//        return 'message';
//    }
}
