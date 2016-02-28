/* global angular */
var aghureport = angular.module('aghureport', ['angular.morris-chart']);

angular.module('aghureport').controller('TaxaDePermanenciaController', function ($scope, $http) {
  $http.get('/ocupacao').success(function (data) {
    $scope.ocupacao = data;
    $scope.xaxis = 'mes';
    $scope.yaxis = ['txo'];
    $scope.label = ['Taxa de Permanência'];
  })
  .error(function (data, status) {
    $scope.error = 'Erro' + data;
  });
});
