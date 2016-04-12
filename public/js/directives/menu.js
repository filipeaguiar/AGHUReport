angular.module('aghureport').directive('ngMenu', function(){
       return {
           restrict: 'E',
           templateUrl: 'templates/partials/menu.html',
           replace: true,
           link: function (){
              angular.element(document).ready( function (){
               componentHandler.upgradeAllRegistered();
               console.log('Chegou');
             });
           }
       };
   });
