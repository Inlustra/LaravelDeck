<?php

namespace App\Deck;

use App\Deck\Deck;
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
        $this->app->singleton('App\Deck\Deck', function ($app) {
            return new Deck();
        });
    }
}