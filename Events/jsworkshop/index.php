<!DOCTYPE html>
<html>
<head>
  <script src="../../js/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#2196F3">
  <title>JS Workshop 2018</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../favicon.png" /> <!--Tab Icon-->

  <!-- CSS  -->
  <link href="../../min/plugin-min.css" type="text/css" rel="stylesheet">
  <link href="../../min/custom-min.css" type="text/css" rel="stylesheet" >

  <!-- Reg form CSS -->
  <link rel="stylesheet" type="text/css" href="css/jsreg.css" media="all" />
  <link rel="stylesheet" type="text/css" href="../../demo.css" media="all" />

  <!-- Google reCaptcha  -->
  <script src='https://www.google.com/recaptcha/api.js'></script>  
</head>
<body id="top" class="scrollspy">

  <!-- Pre Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <!--Navigation-->
  <?php 
  require '../../navigationBar.php'; 
  ?>

  <!-- Introduction Paragraph -->
  <!-- 
  <div class="section scrollspy" id="team">
        <div class="container">
          <center>
            <h2 style="color:#A020F0; font-size: 35px">iMac Registrations 2018</h2>
          </center>
          <div class="message">
            <b>Update</b>: The registartions for iOS application development for academic semester 2018 are currently closed, and will reopen in the <b>THIRD WEEK</b> of <b>January</b>.

          </div>
        </div>
    </div>
  -->
  <!--Form Details-->
  <div class="section scrollspy" id="team">
    <center>
      <h2 style="color:#A020F0; font-size: 35px">JavaScript Workshop 2018</h2>
    </center>
    <br>
    <div class="container">
     
      <div  class="form">
        
        <div id="aboutInterview">
          <p style="font-size: 120%">
            Wondering how to create an attractive, dynamic website?
            Here's a chance to become the web master!
            Grab a seat at the Javascript workshop that is going be conducted on <b>5th/6th/7th of march</b>.
            3 days, 3 different slots of student will be welcomed.
            Limited seats, grab soon....
          </p> 
          <br>
          <p style="font-size: 120%">
          Also refreshments would be given between the workshop and in the end of the workshop each student will be get a certificate.
          </p>
          <br>
            <b style="font-size: 120%">Registration fee : 80Rs</b>
        </div>
        
        <form id="contactform" action="jsValidate.php" method="post">
          <center><p><b>Register here</b></p></center>
          <hr> 
          <p class="contact"><label for="name">First Name</label></p> 
          <input id="name" name="fname" placeholder="First name" required="True" tabindex="1" type="text"> 

          <p class="contact"><label for="name">Last Name</label></p> 
          <input id="name" name="lname" placeholder="Last name" required="True" tabindex="1" type="text"> 

          <p class="contact"><label for="email">E-Mail ID</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="TRUE" type="email"> 

          <p class="contact"><label for="branch">Branch</label></p> 
          <input type="text" name="stream" placeholder="CMPN/IT/ELEX/ELEC/EXTC" required="TRUE">

          <p class="contact"><label for="year">Year</label></p> 
          <input type="year" id="year" placeholder="SE/TE/BE" name="year" required="TRUE" type="text"> 

          <p class="contact"><label for="phone">Mobile phone</label></p> 
          <input id="phone" name="phone" placeholder="9XXXX XXXXX" required="" type="text"> <br>

          <!-- Google reCaptcha Code -->
          <div class="g-recaptcha" data-sitekey="6LcPICkUAAAAAEgQZ7QvL0TNZkGx728-xsStXvoV"></div>
          <br> 
          <input class="buttom" name="submit" id="submit" tabindex="12" value="Register" type="submit" style="margin-left: 33%">
        </form> 
      </div>
    </div>
  </div>                         

  <!--Footer-->
  <?php 
  require '../../footer.php';
  ?>

  <!--  Scripts-->
  <script src="../../min/plugin-min.js"></script>
  <script src="../../min/custom-min.js"></script>

</body>
</html>
