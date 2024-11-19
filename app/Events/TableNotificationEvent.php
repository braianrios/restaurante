<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TableNotificationEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $table_number;

    public function __construct($message, $table_number)
    {
        $this->message = $message;
        $this->table_number = $table_number;
    }

    public function broadcastOn()
    {
        return new Channel('table.' . $this->table_number);
    }
}
