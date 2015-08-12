<?php

namespace App\Deck;

use Illuminate\Support\ServiceProvider;

class DeckServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Deck', function()
        {
            return new Deck();
        });
    }
}