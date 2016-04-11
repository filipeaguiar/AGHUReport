angular.module('aghureport')
  .controller('TaxaDeOcupacaoController', function ($scope, $http, dateService) {
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
          el = document.querySelectorAll('#ocupacao svg').item(0);
          saveSvgAsPng(el, 'Taxa_de_Ocupacao.png', {
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
