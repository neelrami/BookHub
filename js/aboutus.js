var app=angular.module('myApp',['ui.materialize']);

app.controller('myCtrl',function($scope,$http,$window)
{
	$http.get("./php/getaboutus.php")
        .then(function(response) 
            {
                $scope.aboutdata = response.data;
                //window.alert(JSON.stringify(response.data));
                
            });   
});