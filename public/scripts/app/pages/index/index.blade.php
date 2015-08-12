<div>
    <div ng-repeat="card in deck.cards track by $index">
        [[card.toString()]]<br/>
    </div>
    <button ng-click="newDeck()" ng-if="shuffled">Sort Deck</button>
    <button ng-click="shuffleOffline()" ng-if="deck">Angular Shuffle</button>
    <button ng-click="shuffleOnline()" ng-if="deck">Laaravel Shuffle</button>
</div>