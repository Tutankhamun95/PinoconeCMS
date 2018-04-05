var app = angular.module("signUpForm", []);

app.controller("myCtrl", function ($scope) 
{
    $scope.Chinese = ["Dumplings", "Spring Roll", "Cho Mein"];
	
	$scope.Malay = ["Nasi Lemak", "Chicken Rendang", "Laksa Johor"];
    
	$scope.Indian = ["Naan", "Butter Chicken", "Biryani"];
    
    $scope.clearSearch = function() { $scope.searchAll = null;}
    
});

