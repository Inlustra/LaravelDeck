app.factory('Deck', function (Card) {


    /**
     * Private property
     */
    var cards;

    /**
     * Constructor, with class name
     */
    function Deck(cards) {
        this.cards = cards;
    }

    /**
     * Public method, assigned to prototype
     */
    Deck.prototype.toString = function () {
        return 'Deck of ' + cards.length + ' cards.';
    };

    Deck.prototype.toJson = function () {
        var deck = [];
        this.cards.forEach(function (element, index) {
            deck[index] = {'suit': element.suit, 'value': element.value};
        });
        return JSON.stringify(deck);
    };

    Deck.prototype.shuffle = function () {
        this.cards.sort(function () {
            return [1, -1, 0][Math.random() * 3 | 0];
        });
    };

    /**
     * Static method, assigned to class
     * Instance ('this') is not available in static context
     */
    Deck.build = function (data) {
        var cards = [];
        data.forEach(function (element, index) {
            cards[index] = Card.build(element);
        });
        return new Deck(cards);
    };


    /**
     * Return the constructor function
     */
    return Deck;
});