/* global angular */
var aghureport = angular.module('aghureport', ['angular.morris-chart']);

angular.module('aghureport').controller('TaxaDePermanenciaController', function ($scope, $http) {
  $http.get('/permanencia').success(function (data) {
    $scope.ocupacao = data;
    $scope.xaxis = 'competencia_internacao';
    $scope.yaxis = ['taxa_ocupacao'];
    $scope.label = ['Taxa de Permanência'];
  })
  .error(function (data, status) {
    $scope.error = 'Erro' + data;
  });
});
