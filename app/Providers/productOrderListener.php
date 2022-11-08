<?php

namespace App\Providers;

use App\Providers\productOrderevent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class productOrderListener
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
     * @param  \App\Providers\productOrderevent  $event
     * @return void
     */
    public function handle(productOrderevent $event)
    {
        // $product=$event->product;
        // $product->qty-=$event->qty;
        // $product->save();
    }
}
