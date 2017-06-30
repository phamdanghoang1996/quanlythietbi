var myApp = angular.module('myModule', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

myApp.controller('myController',myController);
function myController($scope,$http){
  $http.get('http://localhost:8000/hdWeb/public/baitap/home/delemployees/dataLoad').
  then(function(response){
    $scope.employees = response.data;
  });
}
