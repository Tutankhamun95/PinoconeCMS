var app = angular.module("signUpForm", []);

app.controller("myCtrl", function ($scope) 
{
    $scope.Chinese = ["Dumplings", "Spring Roll", "Cho Mein"];
	
	$scope.Malay = ["Nasi Lemak", "Chicken Rendang", "Laksa Johor"];
    
	$scope.Indian = ["Naan", "Butter Chicken", "Biryani"];
    
    $scope.clearSearch = function() { $scope.searchAll = null;}
	
	$scope.a = 0;
	$scope.b = 0;
	$scope.c = 0;
    
	 $scope.remove = function(index) {
    	$scope.items.splice(index.remove, 1);
		$scope.remove= null;
    };
	
	
	
});

