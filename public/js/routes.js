angular.module('aghureport').config( function ($routeProvider) {
  $routeProvider.
    when('/home', {
      templateUrl: "templates/home.html"
    }).
    when('/especialidades',{
      templateUrl: "templates/especialidades.html"
    }).
    when('/clinicas',{
      templateUrl: "templates/clinicas.html"
    }).
    otherwise({
      redirectTo: '/home'
    });
});
