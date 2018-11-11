var app=angular.module('myApp',['ui.materialize']);

app.controller('myCtrl',function($scope,$http,$window)
{
	$http.get("./php/viewcart.php")
        .then(function(response) 
            {
                $scope.bookdata = response.data;
                window.alert(JSON.stringify(response.data));
                
            });   
});