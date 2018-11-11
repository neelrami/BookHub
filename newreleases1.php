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
    
  <title>BookHub | New Releases</title>

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
      <link rel="stylesheet" href="css/myStyle.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">

      </style>
    </head>
    <body>
      
        <!-- <div class="row image-row">
          <img class="responsive-img logo" src="images/logo.png">
        </div>  -->
        <?php include('php/navbar.php'); ?>
<!--          -->

        
        <div class="row">
          <div class="col s6" >
            <img class="col offset-m2" style="height:480px;" ng-src={{bookimg}} >
          </div>
          <div>
           <p ng-model="bookname" style="font-size: 20px"><b>Name : {{bookname}}</b></p>
              <p ng-model="bookauthor" style="font-size: 20px"><b>Author : {{bookauthor}}</b></p>
             <p ng-model="bookph" style="font-size: 20px"><b>Publication House : {{bookph}}</b></p>
              <p ng-model="booklang" style="font-size: 20px"><b>Language : {{booklang}}</b></p>
             <p ng-model="bookprice" style="font-size: 20px"><b>Price : &#8377; {{bookprice}}</b></p>
              <p ng-model="bookisbn" style="font-size: 20px"><b>ISBN : {{bookisbn}}</b></p>
            
           <p ng-model="bookpages" style="font-size: 20px"><b>No of Pages : {{bookpages}}</b></p>
           <p ng-model="booksm" style="font-size: 20px"><b>Stock : {{booksm}}</b></p>
           <br>
           <?php if(isset($_COOKIE['user'])){ ?>
            <button class="btn btn-large waves-effect waves-light" type="button" ng-disabled="isDisabled" ng-click="addToCart()" name="action">Add to Cart</button>
            <button style="margin-left: 20px"class="btn btn-large waves-effect waves-light" ng-disabled="isItDisabled" type="button" ng-click="" name="action">Buy Now</button>
  
  <?php }
  ?>
          </div>
        </div>
        <?php if(isset($_COOKIE['user'])){ ?>
        <div class="row">
          <div class="col s12">
            <div class="row">
              <div class="input-field col s12 m10 offset-m1">
                <textarea id="review" class="materialize-textarea"></textarea>
                <label for="textarea1" >Write your Review</label>
              </div>
            </div>
            
            
            <center><button class="btn btn-large waves-effect waves-light" type="button" ng-click="submitReview()" name="action">Submit Review</button>
          </center>
          <?php }
  ?>
            </div>
        </div>

        <div class="row">
          <div class="col s12 m10 offset-m1 myFont">
            Read Reviews
          </div>        

        </div>
        <div class="row" ng-repeat="y in reviewdata">
          <div class="col s12 m10 offset-m1">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span>{{y.email_id}}</span>
                <span style="float:right">{{y.review_at}}</span>
                <p  class="card-title">{{y.review}}</p>
              </div>
            </div>
          </div>
        </div>
        <?php include('php/footer.php') ?> 
        <script src="./bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="./bower_components/angular/angular.min.js"></script>
      <script src="./bower_components/materialize/dist/js/materialize.js"></script>
      <script type="text/javascript" src="./bower_components/angular-materialize/src/angular-materialize.js"></script> 
        <script src="js/getnewreleases1.js"></script>
</body>
</html>