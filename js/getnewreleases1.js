var app=angular.module('myApp',['ui.materialize']);

app.controller('myCtrl',function($scope,$http,$window,$attrs)
{
    $scope.bookid='';
	$scope.bookname='';
	$scope.bookauthor='';
	$scope.bookprice='';
	$scope.bookisbn='';
	$scope.bookph='';
	$scope.booklang='';
	$scope.bookstock=0;
	$scope.booksm='';
	$scope.bookpages='';
    $scope.isDisabled=false;
    $scope.isItDisabled=false;
    $scope.bookimg=''
	var full_url = document.URL; // Get current url
	var url_array = full_url.split('?id=') // Split the string into an array with / as separator
	var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)
	$scope.id=last_segment;

	$http.get("./php/getnewreleases1.php", {
        params: {
            id: $scope.id
        }
     })
     .then(function (response) 
     {
         $scope.bookdata=response.data;
         $scope.bookid=($scope.bookdata[0].book_id);
         $scope.bookname=($scope.bookdata[0].book_name);
         $scope.bookauthor=($scope.bookdata[0].book_author);
         $scope.bookisbn=($scope.bookdata[0].book_isbn);
         $scope.bookprice=($scope.bookdata[0].book_price);
         $scope.booklang=($scope.bookdata[0].book_language);
         $scope.bookph=($scope.bookdata[0].book_publication);
         $scope.bookpages=($scope.bookdata[0].book_pages);
         $scope.bookstock=($scope.bookdata[0].book_stock);
         $scope.bookimg=($scope.bookdata[0].book_image);
         if($scope.bookstock>0)
         {
         	$scope.booksm='Available';
            $scope.isDisabled=false;
            $scope.isItDisabled=false;

         }
         else
         {
         	$scope.booksm='Out of Stock';
            $scope.isDisabled=true;
            $scope.isItDisabled=true;
         }
         //window.alert($scope.isDisabled);
     }); 
     $http({
          method  : 'POST',
          url     : 'php/viewReviews.php',
          data    :$.param({'book_id':$scope.id}), //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .then(function (response) 
     {
         $scope.reviewdata=response.data;
    });
     $scope.addToCart=function()
     {
        $http({
          method  : 'POST',
          url     : 'php/addtocart.php',
          data    :$.param({'book_id':$scope.bookid}), //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
       .then(function (response) {
            if(response.data=="0"){
                //$('.incorrect').removeClass('display');
                //window.alert('Not Added');
            }
            else{
                //window.alert("Added");
                $window.location.href='./viewMyCart.php';
            }
        });  
     }

     $scope.submitReview=function()
     {
        window.alert('Review');
        var review = jQuery.trim($("#review").val());
        $scope.review=review;
        $http({
          method  : 'POST',
          url     : 'php/addReview.php',
          data    :$.param({'book_id':$scope.bookid,'review':$scope.review}), //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
       .then(function (response) {
            if(response.data=="0"){
                //$('.incorrect').removeClass('display');
                //window.alert('Not Submitted');
            }
            else
            {
                //window.alert("Submitted");
               $window.location.href='./newreleases1.php?id='+$scope.id;
            }
        });  
     }
});