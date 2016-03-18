angular.module('aghureport')
  .controller('TaxaDePermanenciaController', function ($scope, $http, dateService) {
      $scope.chart = new Morris.Bar({
        element: 'permanencia',
        data: [{}],
        xkey: 'competencia_internacao',
        ykeys: ['taxa_ocupacao'],
        labels: ['Taxa de Permanência'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1976D2']
      });

      $scope.cardlabel = 'Taxa de Permanência';

      var dates = dateService.getDates();

      $scope.updateChart = function (inicio, fim) {
        $http.get('/indicador/G/' + inicio + '/' + fim)
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
          el = document.querySelectorAll('#permanencia svg').item(0);
          saveSvgAsPng(el, 'Taxa_de_Permanencia.png', {
              backgroundColor: '#FFFFFF',
              scale: 2,
            });
        };
    });

angular.module('aghureport')
    .controller('TaxaDeMortalidadeController', function ($scope, $http, dateService) {
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
          $http.get('/indicador/G/' + inicio + '/' + fim)
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
            el = document.querySelectorAll('#mortalidade svg').item(0);
            saveSvgAsPng(el, 'Taxa_de_Mortalidade.png', {
                backgroundColor: '#FFFFFF',
                scale: 2,
              });
          };
      });
