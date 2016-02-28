/* global angular */
var aghureport = angular.module('aghureport', []);

angular.module('aghureport').controller('TaxaDePermanenciaController', function ($scope, $http) {
  var ocupacao = $http.get('/ocupacao').success(function (data) {
    plot(data);
  });

  plot = function plot(plotData) {
    Morris.Bar({
      element: 'chart',
      data: plotData,
      barColors: ['teal'],
      xkey: 'mes',
      ykeys: ['txo'],
      labels: ['Taxa de Ocupação'],
    });
  };
});
