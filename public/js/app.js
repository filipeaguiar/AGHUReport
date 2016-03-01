/* global angular */
var aghureport = angular.module('aghureport', ['angular.morris-chart']);

angular.module('aghureport').controller('TaxaDePermanenciaController', function ($scope, $http) {
  $http.get('/indicador/G/2015-03-01/2016-03-01').success(function (data) {
    $scope.ocupacao = data;
    $scope.xaxis = 'competencia_internacao';
    $scope.yaxis = ['taxa_ocupacao'];
    $scope.label = ['Taxa de Permanência'];
    $scope.cardlabel = 'Taxa de Permanência';
  })
  .error(function (data, status) {
    $scope.error = 'Erro' + data;
  });
});

angular.module('aghureport').controller('TaxaDeMortalidadeController', function ($scope, $http) {
  $http.get('/indicador/G/2015-03-01/2016-03-01').success(function (data) {
    $scope.mortalidade = data;
    $scope.xaxis = 'competencia_internacao';
    $scope.yaxis = ['taxa_mortalidade'];
    $scope.label = ['Taxa de Mortalidade'];
    $scope.cardlabel = 'Taxa de Mortalidade';
  })
  .error(function (data, status) {
    $scope.error = 'Erro' + data;
  });
});

angular.module('aghureport').controller('MortalidadeEspecialidadeController',
 function ($scope, $http) {
  $http.get('/indicador/E/2016-01-01/2016-03-01').success(function (data) {
    $scope.mortalidade = data;
    $scope.xaxis = 'competencia_internacao';
    $scope.yaxis = '["esp_seq", "taxa_mortalidade"]';
    $scope.label = '["Especialidade", "Taxa de Mortalidade"]';
    $scope.cardlabel = 'Taxa de Mortalidade';
  })
  .error(function (data, status) {
    $scope.error = 'Erro' + data;
  });
});
