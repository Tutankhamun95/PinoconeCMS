var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope){
   
    $scope.menus = [{code: '00001', name: 'Japanese Menu', description: 'A variety of sushis that can serve up to 1 family', price: 'RM 129.99', date: '04/04/2018'}];
});