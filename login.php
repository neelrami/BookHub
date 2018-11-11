<html ng-app='loginapp'>
<head>
 <link rel="stylesheet" href="./bower_components/materialize/dist/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="css/footer.css">
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->

<title>Login Page</title>
</head>

<body ng-controller='logincontroller'>
<?php include('php/navbar.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col m6 s12 offset-m3">
            
            <div class="row">
                
                <div class="col s12 m9 offset-m1">
                    <div class="row">
                        <div class="col m12 s12">
                            
                            <center>   
                               <h4>Login</h4>
                           </center> 
                            
                        </div>
                    </div>   
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" >
                            <label for="email">Email</label>
                        </div>
                        <p class='display emailmsg errorMsg'>Please enter a valid email address.</p>

                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" >
                            <label for="password">Password</label>
                        </div>

                    </div>
                    <div class="row">
                         <div class="col s6 m6 offset-m8">
                                <a href="forgotpassword.php" >Forgot Password?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m12 s12">
                            
                            <center>   
                            	<button class="btn btn-large waves-effect waves-light" type="button" ng-click="login()" name="action">Login</button>
                           </center> 
                        <p class='display empty errorMsg' >Please fill all the fields</p>  
                        <p class='display incorrect errorMsg'>Incorrect credentials</p>
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
<script src='./js/login.js'></script>
  
</html>