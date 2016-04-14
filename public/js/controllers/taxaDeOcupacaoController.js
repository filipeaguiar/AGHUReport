angular.module('aghureport').
  controller('TaxaDeOcupacaoController', function ($scope, $http, dateService, indicadorService, imageService) {
      $scope.chart = new Morris.Bar({
        element: 'ocupacao',
        data: [{}],
        xkey: 'competencia_internacao',
        ykeys: ['taxa_ocupacao'],
        labels: ['Taxa de Ocupação'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1976D2']
      });

      $scope.cardlabel = 'Taxa de Ocupação';

      var dates = dateService.getDates();

      $scope.updateChart = function (inicio, fim) {
        indicadorService.getIndicadores( 'G', inicio, fim)
              .success(function (data) {
                $scope.ocupacao = data;
                $scope.chart.setData($scope.ocupacao);
              })
              .error(function (data, status) {
                $scope.error = 'Erro' + data;
              });
      };

      $scope.updateChart(dates[0], dates[1]);
      $scope.saveImage = function () {
        imageService.saveImage('ocupacao');
      };
    });
