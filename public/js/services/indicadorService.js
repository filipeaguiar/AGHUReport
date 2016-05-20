angular.module('aghureport').
  service('indicadorService', function ($http) {

    /**
    * @param {string} Tipo - Tipo do indicador (G, E, U, C)
    * @param {string} Início - Início do período
    * @param {string} Fim - Fim do período
    */

    this.getIndicadores = function ( tipo, inicio, fim ) {
  		return $http.get('/indicador/' + tipo + '/' + inicio + '/' + fim);
  	};
});
