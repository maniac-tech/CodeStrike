<!DOCTYPE html>
<html>
<head>
  <script src="../../js/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#2196F3">
  <title>JavaScript Workshop 2018</title>
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


  <!--Form Details-->
  <div class="section scrollspy" id="team" style="height: 53%">
    <br>
    <center>
      <h2 style="color:#A020F0; font-size: 35px">JavaScript workshop 2018</h2>
    </center>
    <br>
    <div class="container">
      <center>  
        <h5 style="color:#A020F0; font-size: 35px">Your details have been recorded. Check your mailbox for a notification mail. Complete the payment at the earliest to confirm your registration. Your registration will be confirmed once you have paid the registration fee. <br>
          Registration fee: Rs. 150.
          The Registration desks will be set up on the following days:
          <br></h5>
          <h4>28th February - 10 am to 2.30 pm and 1st March - 9.30 am to 3.30pm</h4>
          
          Limited seats only! Complete the payment early to confirm your seats!
          <br>
        </h5>
      </center>
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
