var app = angular.module("myApp", []);


// Reading data from function.php
app.controller("myCtrl", function($scope, $http){
    
    $http.get("function.php").then(function(response){
                                   
       $scope.foods = response.data.records;

  	   //$scope.menus = response.data.records2;
    });

    $http.get("function2.php").then(function(response){
                                  

  	   $scope.menus = response.data.records;
    });

    $http.get("function3.php").then(function(response){
                                  

  	   $scope.mixes = response.data.records;
    });

    $scope.postData = function(){

    	var request = $http({
    		method: "post",
    		url: window.location.href + "index.php",
    		data: {
    			menu_id: $scope.angMenu,
    			food_id: $scope.angFood,
    		},

    		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    	});
    }


    
    
});