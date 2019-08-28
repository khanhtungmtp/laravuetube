<?php

namespace App\Listeners\Users;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateUserChannel
{
    /**
     * Event insert vào table channel khi tạo user mới (model user)
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->channel()->create([
            'name' => $event->user->name
        ]);
    }
}
