angular.module('aghureport').controller('TaxaDePermanenciaController', function ($scope, $http) {
  $http.get('/indicador/G/2015-03-01/2016-03-01').success(function (data) {
    $scope.ocupacao = data;
    $scope.xaxis = 'competencia_internacao';
    $scope.yaxis = ['taxa_ocupacao'];
    $scope.label = ['Taxa de Permanência'];
    $scope.cardlabel = 'Taxa de Permanência';
    jQuery( "#permanencia" ).children().prop('id', 'permanenciaChart');
    console.log($scope.trocou);

  })
  .error(function (data, status) {
    $scope.error = 'Erro' + data;
  });

  $scope.html = '';

  $scope.saveImage = function () {
     jQuery( "#permanencia" ).children().prop('id', 'permanenciaChart');
    // saveSvgAsPng( 'permanenciaChart', 'Taxa_de_Permanencia.png', { backgroundColor:'#FFFFFF', scale: 2 });
  };
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

function saveChart(id) {
  saveSvgAsPng(document.getElementById(id), 'diagram.png');
}
