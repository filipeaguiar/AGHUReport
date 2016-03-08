angular.module('aghureport').factory('dateService', function ($http) {

  var _getDates = function () {

    var today = new Date();
    var lastYear = new Date();
    lastYear.setFullYear(lastYear.getFullYear() - 1);
    today = today.toISOString().substring(0, 7);
    today += '-01';
    lastYear = lastYear.toISOString().substring(0, 7);
    lastYear += '-01';
    interval = [lastYear, today];

    return interval;
  };

  return {
    getDates: _getDates,
  };

});
