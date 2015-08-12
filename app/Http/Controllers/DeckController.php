<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeckController extends Controller
{
    /**
     * Generate a new ordered deck
     *
     * @return Response JSON version of all cards.
     */
    public function newDeck()
    {
        return response()->json(\Deck::newDeck(false));
    }

    public function shuffledDeck()
    {
        return response()->json(\Deck::newDeck(true));
    }

    public function shuffleDeck()
    {
        $deck = \Input::all();
        shuffle($deck);
        return response()->json($deck);

    }

}
