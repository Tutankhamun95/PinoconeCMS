var app = angular.module("signUpForm", []);

app.controller("myCtrl", function ($scope) 
{
    $scope.salutationLists = ["Mr", "Mrs", "Datok", "Datin"];
    
    $scope.stateLists = ["Sarawak", "Johor", "Pahang", "Penang"];
});