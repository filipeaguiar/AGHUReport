angular.module('aghureport').config( function ($routeProvider) {
  $routeProvider.
    when('/home', {
      templateUrl: "templates/home.html"
    }).
    otherwise({
      redirectTo: '/home'
    });
});
