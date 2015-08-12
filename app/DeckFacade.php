<?php
namespace App\Deck;

use Illuminate\Support\Facades\Facade;

class DeckFacade extends Facade
{

    protected static function getFacadeAccessor() { return 'Deck'; }

}