app.config(function ($interpolateProvider,$urlRouterProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
    $urlRouterProvider.otherwise("/");
});