<html>
    <head>

    </head>
    <body ng-app="DeckApp">
        <main ui-view></main>
    </body>
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script>

    <script src="scripts/app/app.js"></script>
    <script src="scripts/app/app.config.js"></script>
    <script src="scripts/app/app.run.js"></script>

    <script src="scripts/app/pages/index/index.config.js"></script>
    <script src="scripts/app/pages/index/index.controller.js"></script>

    <script src="scripts/app/entity/deck.service.js"></script>
    <script src="scripts/app/entity/deck.factory.js"></script>
    <script src="scripts/app/entity/card.factory.js"></script>
</html>