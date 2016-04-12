angular.module('aghureport').directive('ngHeader', function(){
       return {
           restrict: 'E',
           templateUrl: 'templates/partials/header.html',
           replace: true
          //  compile: function (){
          //    angular.element(document).ready( function (){
          //     componentHandler.upgradeAllRegistered();
          //     console.log('Chegou');
          //   });
          // }
       };
   });
