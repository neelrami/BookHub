  <!DOCTYPE html >   
  <html>
    <head>
      <!--Import Google Icon Font-->
      
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    
  <title>Home Page</title>

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./bower_components/materialize/dist/css/materialize.min.css">
      <link rel="stylesheet" href="css/Homepage.css">
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <!-- <link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.carousel.css">
      <link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css"> -->
      <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="css/footer.css">
  
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
        .menuanchor{
          color:inherit !important;
          text-decoration: none!important;
        }
        .mobile-links{
         text-decoration: none!important; 
        }

        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
         #sidenav-overlay
         {
              background-color: rgba(0,0,0,0);
         }
    </style>

    <body>
      <div class="container-fluid homepage-body">
        <!-- <div class="row image-row">
          <img class="responsive-img logo" src="images/logo.png">
        </div>  -->
        <?php include('php/navbar.php'); ?>
      <div class"row">
        <div class="col m12">
            <div id="jssor_1" class='desktop' style="position:relative;margin:0 auto;top:0px;left:0px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="images/oval.svg" />
        </div>
        <div data-u="slides" class='desktop' style="cursor:default;position:relative;top:0px;left:0px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/SlideShow1.jpg"/>
            </div>
            <div>
                <img data-u="image" src="images/SlideShow2.jpg" />
            </div>
           
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
      </div>
    </div>
    <div class="row" style="background-color:#F0F0F0;">
    <section id="cd-timeline" class="cd-container" >
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="images/step_1.jpg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2 class="step-title">Create an Account</h2>
        <p>Create an account on this website. You can use this account to view any book,order a book or you can also review a book.</p>
        <span class="cd-date">Step 1</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-movie">
        <img src="images/step_2.jpg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2 class="step-title">View Books of your choice</h2>
        <p>Here you can find any books right from Latest Releases to Fiction Books.You can view details such as price,author,language,publication etc.</p>
        <span class="cd-date">Step 2</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="images/step_3.jpg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2 class="step-title">Order a Book</h2>
        <p>After you have found book of your choice, you can order a book.</p>
        <span class="cd-date">Step 3</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-location">
        <img src="images/step_4.jpg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content" id="sector">
        <h2 class="step-title">Review a Book</h2>
        <p>After reading a book, you can review a book which will also help other users in determining whether to buy a particular book or not.</p>
        <span class="cd-date">Step 4</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
  </section>
</div>
     
              
      
   
    </div>  
      <?php include('php/footer.php') ?>     
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
      <script src="./bower_components/angular/angular.min.js"></script>
      <script type="text/javascript" src="./bower_components/materialize/dist/js/materialize.js"></script>
      <script src="./bower_components/angular-materialize/src/angular-materialize.js"></script>
     <!--  <script src="OwlCarousel2-2.2.1/dist/owl.carousel.js"></script> -->

<script src="js/main.js"></script>
     

      
      <script>
        $( document ).ready(function(){
           $(".button-collapse").sideNav();
        });
      </script>

    <script src="js/jssor.slider-22.2.16.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        

       jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
          function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
      
    
    </script>
    
    </body>
  </html>