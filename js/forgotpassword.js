var app=angular.module('fpapp',['ui.materialize']);

function isValidEmailAddress(emailAddress) 
{
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

app.controller('fpcontroller',function($scope,$http,$window)
{
	//window.alert('Hello');
	$scope.fp=function(){
			
		var email = jQuery.trim($("#email").val());
		var valid=true;
		if(email=='')
		{
			$('.empty').removeClass('display');
			valid=false;
		}
		else {
			$('.empty').addClass('display');
			
		}
		if(email!=''){
			
			if(!isValidEmailAddress(email))
			{
				$('.emailmsg').removeClass('display');		
				valid=false;
			}
			else {
				$('.emailmsg').addClass('display');	
					
			}	
		}
		if(valid==true){
			$http({
          method  : 'POST',
          url     : 'php/1.php',
          data    :$.param({'email':email}), //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
       .then(function (response) {
  			if(response.data=="0"){
  				$('.incorrect').removeClass('display');
  			}
  			else{
  				$window.location.href='/forgotpasswordMsg.php';
  			}
  		});  
		}	
	}
});