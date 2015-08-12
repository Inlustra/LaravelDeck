app.controller('IndexController', function ($scope, DeckService, Card) {

    $scope.newDeck = function () {
        DeckService.newDeck().then(function (deck) {
            $scope.deck = deck;
        }, function (error) {
            $scope.deck = error;
        });
        $scope.shuffled = false;
    };

    $scope.shuffleOnline = function () {
        DeckService.shuffleDeck($scope.deck)
            .then(function (deck) {
                $scope.deck = deck;
            }, function (error) {
                $scope.deck = error;
            });

        $scope.shuffled = true;
    };

    $scope.shuffleOffline = function () {

        $scope.shuffled = true;
        $scope.deck.shuffle();
    };

    $scope.shuffled = false;
    $scope.newDeck();


});