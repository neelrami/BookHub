<html ng-app="signupapp">
<head>
 <link rel="stylesheet" href="./bower_components/materialize/dist/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/signup.css">

    <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="css/footer.css">
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->

<title>Sign Up Page</title>
</head>

<body ng-controller='signupcontroller'>
<?php include('php/navbar.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col m6 s12 offset-m3">
            
            <div class="row">

           
                <div class="col s12 m9 offset-m1">
                    <div class="row">
                        <div class="col m12 s12">
                            
                            <center>   
                               <h4>Sign Up</h4>
                           </center> 
                            
                        </div>
                    </div>    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" >
                            <label for="email">Email</label>
                        </div>
                        <p class='display emailmsg'>Please enter a valid email address.</p>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" >
                            <label for="password">Password</label>

                        </div>
                        <div id="pswd_info" class='display col s12'>
                            <h4>Password must meet the following requirements:</h4>
                            <ul>
                                <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                               <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                               <li id="number" class="invalid">At least <strong>one number</strong></li>
                                <li id="length" class="invalid">At least <strong>8 characters</strong></li>
                            </ul>
                        </div>

                    </div>
                        <div class="row">
                        <div class="input-field col s12">
                            <input id="cpassword" type="password" >
                            <label for="cpassword">Confirm Password</label>
                        </div>
                        <p class='display passwordmsg'>Passwords don't match</p>
                    </div>
                   <!-- <div class="row">
                        <div class="col s12">
                            <p>
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember me</label>
                            </p>
                        </div>
                    </div>
                -->
                    
                    <div class="row">
                        <div class="col m12 s12">
                            
                            <center>   
                            	<button class="btn btn-large waves-effect waves-light" type="button" ng-click="signup()" name="action">Sign Up</button>
                           </center> 
                        <p class='display empty errorMsg' >Please fill all the fields</p>  
                        <p class='display incorrect errorMsg'>Email id already exists</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('php/footer.php'); ?>
</body>
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="./bower_components/angular/angular.min.js"></script>
<script src="./bower_components/materialize/dist/js/materialize.js"></script>
<script type="text/javascript" src="./bower_components/angular-materialize/src/angular-materialize.js"></script>
<script src='./js/signup.js'></script>
  

  
</html>