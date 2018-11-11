var app=angular.module('rpapp',['ui.materialize']);

app.controller('rpcontroller',function($scope,$http,$window){
	$('#password').keyup(function(){
		
   var pswd = $(this).val();

	   if ( pswd.length < 8 ) {
	    $('#length').removeClass('valid').addClass('invalid');
	} else {
	    $('#length').removeClass('invalid').addClass('valid');
	}
	if ( pswd.match(/[A-z]/) ) {
	    $('#letter').removeClass('invalid').addClass('valid');
	} else {
	    $('#letter').removeClass('valid').addClass('invalid');
	}

	//Validate capital letter
	if ( pswd.match(/[A-Z]/) ) {
	    $('#capital').removeClass('invalid').addClass('valid');
	} else {
	    $('#capital').removeClass('valid').addClass('invalid');
	}

	//validate number
	if ( pswd.match(/\d/) ) {
	    $('#number').removeClass('invalid').addClass('valid');
	} else {
	    $('#number').removeClass('valid').addClass('invalid');
	}
	}).focus(function() {
	    $('#pswd_info').removeClass('display');
	}).blur(function() {
	    var len=$('#length').hasClass('valid');
	    var  let=$('#letter').hasClass('valid');
	    var cap=$('#capital').hasClass('valid');
	    var number=$('#number').hasClass('valid');
	    if(len==true && let==true && cap==true && number==true){
	    $('#pswd_info').addClass('display');
		}
	});

	$scope.rp=function(){
		var password=jQuery.trim($("#password").val());
		var cpassword=jQuery.trim($("#cpassword").val());
		var valid=true;
		if(password=='' || cpassword==''){
			$('.empty').removeClass('display');
			valid=false;
		}
		else {
			$('.empty').addClass('display');
			
		}
		
		if(password!='' && cpassword!=''){
			if(password!=cpassword){
				$('.passwordmsg').removeClass('display');		
				valid=false;	
			}
			else {
				$('.passwordmsg').addClass('display');	
					
			}
		}
		if(!($('#pswd_info').hasClass('display'))){
			valid=false;
		}

		if(valid==true){
			$http({
          method  : 'POST',
          url     : 'php/web_registration.php',
          data    :$.param({'password':password,'cpassword':cpassword}), //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
       .then(function (response) {
  			if(response.data=="0"){
  				$('.incorrect').removeClass('display');
  			}
  			else
  			{
  				$window.location.href='/login.php';
  			}
  		});  
		}
	}
});	
