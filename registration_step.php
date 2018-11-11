<html ng-app='regStep1app'>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    

    <!-- <link rel="stylesheet" href="css/login.css"> -->

    <!-- Optional theme -->

    <!-- Latest compiled and minified JavaScript -->
  <link href="css/registration.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" href="./bower_components/materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" href="./bower_components/angular-material/angular-material.min.css">
   
    
    <style>
        input{
            color: black !important;
        }

        label{
            color: black !important;
        }
        


    </style>

    <title>Exam Registration Page</title>
</head>

<body ng-controller='regStep1controller'>
    <section class="section">
        <h1>Register for ABC Exam</h1>

        <div class="form-progress">
            <progress class="form-progress-bar" min="0" max="100" value="0" step="33" aria-labelledby="form-progress-completion"></progress>

            <div class="form-progress-indicator one active"></div>
            <div class="form-progress-indicator two"></div>
            <div class="form-progress-indicator three"></div>
            <div class="form-progress-indicator four"></div>

            <p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complete</p>
        </div>


        <div class="animation-container">
            <!-- #################################### STEP ONE ################################################ -->

            <div id="form1" class="form-step js-form-step" data-step="1">

                <p class="form-instructions"><strong>Verify your Aadhaar Details.</strong><br>If any discripancies are found,contact on our toll free number.</p>

                <form action="" name="form-step-1">
                    <div class="fieldgroup">
                        <input type="text" name="aadhar" id="aadhar" ng-model='aadhar'/>
                        <label for="aadhar">Aadhar Card No</label>
                    </div>

                    <div class="fieldgroup">
                        <input type="text" name="f_name" id="f_name" ng-model='f_name'/>
                        <label for="f_name">First name</label>
                    </div>

                    <div class="fieldgroup">
                        <input type="text" name="m_name" id="m_name" ng-model='m_name'/>
                        <label for="m_name">Middle Name</label>
                    </div>

                    <div class="fieldgroup">
                        <input type="text" name="l_name" id="l_name" ng-model='l_name'/>
                        <label for="l_name">Last Name</label>
                    </div>
                    
                    <div>
                        <p>
                            <input class="radioTop" ng-model='gender' value='m' name="group1" type="radio" id="test1"/>
                            <label for="test1">Male</label>
                        </p>
                        <p>
                            <input class="radioTop" ng-model='gender' value='f' name="group1" type="radio" id="test2"/>
                            <label for="test2">Female</label>
                        </p>
                        <p>
                            <input class="radioTop" ng-model='gender' value='o' name="group1" type="radio" id="test3"/>
                            <label for="test3">Other</label>
                        </p>
                    </div>
                    <!-- <md-content style="margin-top:20px;" layout-padding="10px" ng-cloak="" class="datepickerdemoBasicUsage">
                        <div layout-gt-xs="row">
                            <div flex-gt-xs="">
                                <md-datepicker ng-model="ctrl.myDate" md-placeholder="Enter date"></md-datepicker>
                            </div>
                        </div>
                    </md-content> -->

                    <div class="buttons">

                        <button type="submit" class="btn1">Continue</button>
                    </div>
                    <p class="display empty errorMsg">Please fill all the fields</p>
                    <p class="display incorrect errorMsg">Incorrect Details</p>
                </form>

            </div>

            <!-- Step two -->
            <div id="form2" class="form-step js-form-step waiting hidden" data-step="2">



                <form action="" name="form-step-2">

                    <div class="fieldgroup">

                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="address" ng-model="address" class="materialize-textarea"></textarea>
                        <label for="address">Address</label>

                    </div>

                    <div class="fieldgroup">
                        <input type="text" ng-model="phone" name="phone" id="phone" />
                        <label for="phone">Contact Number</label>
                    </div>

                    <div class="buttons">


                        <button type="submit" class="btn1">Continue</button>
                    </div>
                    <p class="display empty errorMsg">Please fill all the fields</p>
                    <p class="display invalid errorMsg">Please enter a valid mobile number</p>
                    <p class="display notTen errorMsg">Please enter a 10 digit mobile number</p>
                </form>

            </div>



            <!-- Step three -->
            <div id="form3" class="form-step js-form-step waiting hidden" data-step="3" style="height:100vh;">

                <p class="form-instructions"><strong>Please upload your image and signature.</strong></p>
                <div class="file-field input-field fieldgroup">
                    <div class="btn">
                        <span>Image</span>
                        <input id="photo" type="file" ng-model="b">
                    </div>
                    <div class="file-path-wrapper">
                        <input id="photo1" ng-model="Photo" class="file-path validate" type="text">
                    </div>
                </div>
                <div>
                    <center>
                        <img  id="photoPreview">
                    </center>
                </div>
                <div ng-if="photCon">
                    <center>
                        <img style="border:3px solid black;" width="200px" height="200px"  ng-src="{{FinalPhoto}}">
                    </center>
                </div> 
                <div class="file-field input-field fieldgroup">
                    <div class="btn">
                        <span>Signature</span>
                        <input id="sign" type="file" ng-model="a">
                    </div>
                    <div class="file-path-wrapper">
                        <input id="sign1" ng-model="Signature" class="file-path validate" type="text">
                    </div>
                </div>
                <div>
                    <center>
                        <img id="signPreview">
                    </center>
                </div>
                <div ng-if="signatureCon">
                    <center>
                        <img style="border:3px solid black;" width="200px" height="200px" ng-src="{{FinalSignature}}">
                    </center>
                </div> 
               
                <div class="buttons">
                 <center>   <button type="submit" class="btn1" >Continue</button></center>
                </div>
               
                <p class="display empty errorMsg">Please fill all the fields</p>
                <p class="display notImage errorMsg">Please upload an image</p>
                <p class="display imageSize errorMsg">Max Image Size : 5MB</p>
                <p class="display unknownError errorMsg">Some error has occured.Please try again later</p>
            </div>



            <!-- Step four -->
            <div id="form4" class="form-step js-form-step waiting hidden" data-step="4">

                <p class="form-instructions"><strong>Please enter your Credit Card Details.</strong>
                </p>

                    <form action="" name="form-step-4">
                     <div class="fieldgroup">
                        <input type="text" name="ccnumber" id="ccnumber" />
                        <label for="ccnumber">Credit card number</label>
                    </div>
          
                    <div class="fieldgroup">
                        <input type="text" name="ccname" id="ccname" />
                        <label for="ccname">Name of Credit Card</label>
                    </div>

                    <div class="fieldgroup">
                        <input type="text" name="ccexpiry" id="ccexpiry" />
                        <label for="ccexpiry">Credit card expiry</label>
                    </div>
                    <div class="fieldgroup">
                        <input type="password" name="ccpassword" id="ccpassword" />
                        <label for="ccpassword">CVV Number</label>
                    </div>
                    <div class="buttons">


                        <button type="submit" class="btn1">Continue</button>
                    </div>
                     <p class="display empty errorMsg">Please fill all the fields</p>
                     <p class="display invalidCCNum errorMsg">Please enter a 16 digit Credit Card Number</p>
                     <p class="display invalidCVV errorMsg">Please enter a 3 digit CVV Number</p>
                </form>
            </div>
        </div>
    </section>
</body>

<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function readURL(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function (e) 
            {
                $('#photoPreview').attr('src', e.target.result);
                //$('#signPreview').attr('src', e.target.result);
            }
        reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL1(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function (e) 
            {
                //$('#photoPreview').attr('src', e.target.result);
                $('#signPreview').attr('src', e.target.result);
            }
        reader.readAsDataURL(input.files[0]);
        }
    }
    $("#photo").change(function()
    {
        readURL(this);
    });
     $("#sign").change(function()
     {
         readURL1(this);
     });
</script>
<script type="text/javascript" src="./bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="./bower_components/angular-animate/angular-animate.min.js"></script>
<script type="text/javascript" src="./bower_components/angular-aria/angular-aria.min.js"></script>
<script type="text/javascript" src="./bower_components/angular-messages/angular-messages.min.js"></script>
<script type="text/javascript" src="./bower_components/angular-material/angular-material.min.js"></script>
<script src="./bower_components/materialize/dist/js/materialize.js"></script>
<script type="text/javascript" src="./bower_components/angular-materialize/src/angular-materialize.js"></script>

<script src="js/examreg.js"></script>

</html>