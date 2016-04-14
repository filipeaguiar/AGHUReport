angular.module('aghureport').
    controller('TaxaDeMortalidadeController', function ($scope, $http, dateService, indicadorService, imageService) {
        $scope.chart = new Morris.Bar({
          element: 'mortalidade',
          data: [{}],
          xkey: 'competencia_internacao',
          ykeys: ['taxa_mortalidade'],
          labels: ['Taxa de Mortalidade'],
          hideHover: 'auto',
          resize: true,
          barColors: ['#FF5252']
        });

        $scope.cardlabel = 'Taxa de Mortalidade';

        var dates = dateService.getDates();

        $scope.updateChart = function (inicio, fim) {
          indicadorService.getIndicadores( 'G', inicio, fim)
                .success(function (data) {
                  $scope.mortalidade = data;
                  $scope.chart.setData($scope.mortalidade);
                })
                .error(function (data, status) {
                  $scope.error = 'Erro' + data;
                });
        };

        $scope.updateChart(dates[0], dates[1]);

        $scope.saveImage = function () {
            imageService.saveImage('mortalidade');
          };
      });
