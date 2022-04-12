<?php

namespace App\Listeners;

use App\Events\FirstEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FirstListeners
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FirstEvent  $event
     * @return void
     */
    public function handle(FirstEvent $event)
    {
        //
        echo $event->user."1".PHP_EOL;
    }
}
