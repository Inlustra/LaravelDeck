<?php
namespace App\Deck;

use Illuminate\Support\Facades\Facade;

class Deck
{

    public $suits;
    public $values;

    public function __construct()
    {
        //Get the available types of cards from configuration in 'app/config/enums.php'. (Custom cards anyone?)
        $this->suits = \Config::get('enums.card_suits');
        $this->values = \Config::get('enums.card_values');
    }

    /**
     * @param bool|true $shuffle If true, will shuffle the deck before return.
     * @param int $jokers The amount of jokers to add to a deck.
     * @return array A new 52 card deck.
     */
    public function newDeck($shuffle = true, $jokers = 2)
    {
        $deck = array();
        foreach ($this->suits as $suit) {
            foreach ($this->values as $value) {
                array_push($deck, new Card($suit, $value));
            }
        }
        $joker = new Card();
        for ($i = 0; $i < $jokers; $i++) {
            array_push($deck, $joker);
        }

        if ($shuffle)
            shuffle($deck);
        return $deck;
    }
}