var app = angular.module('signUpForm', []);

app.controller('myCtrl', function($scope) {
   $scope.Malay = [
        {Product:"Nasi Lemak", Price: 10.99},
        {Product:"Chicken Rendang", Price: 6.50},
        {Product:"Curry Laksa", Price: 9.99},
        
    ];
	
	$scope.Chinese = [
        {Product:"Cho Mein ", Price: 10.99},
        {Product:"Spring Roll ", Price: 6.50},
        {Product:"Dumplings ", Price: 9.99},
        
    ];
	
	$scope.Indian = [
        {Product:"Biryani", Price: 10.99},
        {Product:"Chicken Masala", Price: 6.50},
        {Product:"Butter Chicken", Price: 9.99},
        
    ];
	
    $scope.editing = false;
    $scope.addItem = function(item) {
        $scope.items.push(item);
        $scope.item = {};
    };
    
    $scope.myCartItems = [];
    
    $scope.addToCart = function(item)
    {
      $scope.myCartItems.push(item);
    }
	
	 $scope.DeleteToCart = function(item)
    {
      $scope.myCartItems.splice(item-1, 1);
    }
	
});

