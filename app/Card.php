<?php
namespace App\Deck;

class Card
{
    public $suit;
    public $value;

    public function __construct($suit = null, $value = null)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function __toString()
    {
        if (is_null($this->suit)) { //If the card has no suit, assume it's a joker.
            return 'Joker';
        }
        return $this->suit . ' of ' . $this->value;
    }
}