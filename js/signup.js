var app=angular.module('signupapp',['ui.materialize']);
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
app.controller('signupcontroller',function($scope,$http,$window){
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

	//validate capital letter
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

	$scope.signup=function(){
		var email = jQuery.trim($("#email").val());
		var password=jQuery.trim($("#password").val());
		var cpassword=jQuery.trim($("#cpassword").val());
		var valid=true;
		if(email=='' || password==''){
			$('.empty').removeClass('display');
			valid=false;
		}
		else {
			$('.empty').addClass('display');
			
		}
		if(email!=''){
			
			if(!isValidEmailAddress(email)){
				$('.emailmsg').removeClass('display');		
				valid=false;
			}
			else {
				$('.emailmsg').addClass('display');	
					
			}	
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
          data    :$.param({'email':email,'password':password}), //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
       .then(function (response) {
  			if(response.data=="0"){
  				//alert(response);
  				$('.incorrect').removeClass('display');
  			}
  			else{
  				//alert(response);
  				alert("Successful Registration");
  				$window.location.href='./login.php';
  			}
  		});  
		}
	}
});	