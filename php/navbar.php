<div class="row nav-row">      
         <div class="navbar-fixed"> 
            <nav>
                <div class="nav-wrapper light blue lighten-1">
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <ul class="left hide-on-med-and-down nav-items">
                    <li ><a class="menuanchor" href="index.php">Home</a></li>
                    <li><a class="menuanchor" href="aboutus.php">About Us</a></li>
                    <li><a class="menuanchor" href="newreleases.php">New Releases</a></li>
                    <li><a class="menuanchor" href="newreleases.php">Must Read</a></li>
                    <li><a class="menuanchor" href="newreleases.php">Fiction</a></li>
                    </ul>
                  <ul class="right hide-on-med-and-down nav-items">
                    <!-- Dropdown Trigger -->
    <?php if(!isset($_COOKIE['user'])){ ?>
   <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">SignUp</a></li>
  <!-- Dropdown Structure -->
  <?php }
else{
  require_once('php/config.php');
  $userid=$_COOKIE['user'];
  $sql='select * from users where user_id="$userid"';
  $result=mysqli_query($conn,$sql) or die($sql);
  $row=mysqli_fetch_array($result);
  ?>
   <li><a href="viewMyCart.php"> My Cart </a></li>
    <li><a href="php/web_logout.php">Logout</a></li>
<?php  
}
  ?>
                   </ul>
                  <ul id='dropdown1' class='dropdown-content'>
      </ul>
 
                  <ul class="side-nav" id="mobile-demo">
                    <li ><a class="mobile-links" href="Homepage.php">Home</a></li>
                    <li><a class="mobile-links" href="About_Us.php">About Us</a></li>
                    <li><a class="mobile-links" href="Recent_Notices.php">Recent Notices</a></li>
                    <li><a class="mobile-links" href="Practice_Questions.php">Practice Questions</a></li>
                    <li><a class="mobile-links" href="sector">Skill Sector Tests</a></li>
                    <li><a class="mobile-links" href="Gallery.php">Gallery</a></li>
                    <li><a class="mobile-links" href="Guidelines.php">Guidelines</a></li>
                <li><a  class="mobile-links" href="login.php">Login</a></li>
    <li><a  class="mobile-links" href="signup.php">SignUp</a></li>
   
                  </ul>
                </div>
            </nav>
         </div> 
      </div>