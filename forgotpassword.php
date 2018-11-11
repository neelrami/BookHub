<html ng-app='fpapp'>
<head>
 <link rel="stylesheet" href="./bower_components/materialize/dist/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/forgotpassword.css">
    
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->

<title>Forgot Password Page</title>
</head>

<body ng-controller='fpcontroller'>
    <div class="container-fluid">
    <div class="row">
        <div class="col m6 s12 offset-m3">
            
            <div class="row">
                
                <div class="col s12 m9 offset-m1">
                    <div class="row">
                        <div class="col m12 s12">
                            
                            <center>   
                               <h4>Forgot Password?</h4>
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
                        <div class="col m12 s12">
                            
                            <center>   
                                <button class="btn btn-large waves-effect waves-light" type="button" name="action" ng-click="fp()">Submit</button>
                           </center> 
                        <p class='display empty emailmsg1'>Please enter your email address</p>  
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="./bower_components/angular/angular.min.js"></script>
<script src="./bower_components/materialize/dist/js/materialize.js"></script>
<script type="text/javascript" src="./bower_components/angular-materialize/src/angular-materialize.js"></script>
<script src='./js/forgotpassword.js'></script>
</html>