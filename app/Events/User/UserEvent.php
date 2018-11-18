<?php

namespace App\Events\User;

use App\Events\BaseEventBroadcasting as Event;
use App\Models\User;
use App\Transformers\User\BroadcastTransformer;
use Illuminate\Broadcasting\PrivateChannel;


abstract class UserEvent extends Event
{
    /**
     * Create a new event instance.
     *
     * @param User $user The user that has been updated.
     */
    public function __construct(User $user)
    {
        $this->model = $user;
        $this->transformer = new BroadcastTransformer();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return PrivateChannel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('App.User');
    }
}