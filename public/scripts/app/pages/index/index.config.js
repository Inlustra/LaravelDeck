app.config(function ($stateProvider) {
    $stateProvider
        .state('main', {
            url: '/',
            templateUrl: 'views/index',
            controller:'IndexController'
        });
});