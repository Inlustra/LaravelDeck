app.service('DeckService', function ($http, $q, Deck) {
    return {
        newDeck: function () {
            var httpget = $http.get('deck/');
            return $q(function (resolve, reject) {
                httpget.success(function (deck) {
                    resolve(Deck.build(deck));
                }).error(function (error) {
                    reject(error);
                });
            });
        },

        shuffleDeck: function (data) {
            var httppost = $http.post('deck/shuffle', data.toJson())
            return $q(function (resolve, reject) {
                httppost.success(function (deck) {
                    resolve(Deck.build(deck));
                }).error(function (error) {
                    reject(error);
                });
            });
        }
    };
});