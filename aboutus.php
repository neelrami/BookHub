<!DOCTYPE html >   
  <html ng-app="myApp" ng-controller="myCtrl">
    <head>
      <!--Import Google Icon Font-->
      
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
    
  <title>BookHub | About Us</title>

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./bower_components/materialize/dist/css/materialize.min.css">
      <!-- <link rel="stylesheet" href="css/Homepage.css">
       --><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <!-- <link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.carousel.css">
      <link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css"> -->
      <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="css/footer.css">
  
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      
        <!-- <div class="row image-row">
          <img class="responsive-img logo" src="images/logo.png">
        </div>  -->
        <?php include('php/navbar.php'); ?>

        <div class="row">
        <div class="col s12 m3" ng-repeat="x in aboutdata">
          <div class="card">
            <div class="card-image">
              <img ng-src={{x.image}}>
              <span class="card-title">{{x.name}}</span>
            </div>
            <div class="card-content">
              <p style="font-size: 16px"><b>Role : {{x.role}}</b></p>
              
            </div>
            
          </div>
        </div>
        
          </div>
        
        <?php include('php/footer.php') ?>  
      
      <script src="./bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="./bower_components/angular/angular.min.js"></script>
      <script src="./bower_components/materialize/dist/js/materialize.js"></script>
      <script type="text/javascript" src="./bower_components/angular-materialize/src/angular-materialize.js"></script>
      <script src="js/aboutus.js"></script>
  </body>
  </html>