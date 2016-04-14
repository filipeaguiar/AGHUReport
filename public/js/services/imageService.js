angular.module('aghureport').
  service('imageService', function (){

    /**
    * @param {string} id - Id do campo a ser salvo
    */

    function svi( id ) {
      el = document.querySelectorAll('#' + id + ' svg').item(0);
      saveSvgAsPng(el, id + '.png', {
          backgroundColor: '#FFFFFF',
          scale: 2,
      });
    }

    this.saveImage = function (id) {
      return svi(id);
    };
});
