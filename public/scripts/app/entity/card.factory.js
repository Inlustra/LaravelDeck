app.factory('Card', function () {


    /**
     * Private property
     */
    var suit, value;

    /**
     * Constructor, with class name
     */
    function Card(suit, value) {
        this.suit = suit;
        this.value = value;
    }

    /**
     * Public method, assigned to prototype
     */
    Card.prototype.toString = function () {
        if (this.suit == null) { //If the card has no suit, assume it's a joker.
            return 'Joker';
        }
        return this.value + ' of ' + this.suit + 's';
    };

    /**
     * Static method, assigned to class
     * Instance ('this') is not available in static context
     */
    Card.build = function (data) {
        if (!angular.isDefined(data['suit'])) {
            return new Card();
        }
        return new Card(data['suit'], data['value']);
    };

    /**
     * Return the constructor function
     */
    return Card;
});