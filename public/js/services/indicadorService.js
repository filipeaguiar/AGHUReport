angular.module('aghureport').factory('indicadorService', ['dateService', function (dateService) {

  /**
  * @param {string} Tipo - Tipo do indicador (G, E, U, C)
  * @param {string} Início - Início do período
  * @param {string} Fim - Fim do período
  */

  var _getIndicadores = function ( tipo, inicio, fim) {
    $http.get('/indicador/' + tipo + '/' + inicio + fim).
      success();
  };

}]);
