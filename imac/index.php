<!DOCTYPE html>
<html>
<head>
  <script src="../js/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#2196F3">
  <title>iMac Co-ordinator Interviews 2018</title>
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.png" /> <!--Tab Icon-->

  <!-- CSS  -->
  <link href="../min/plugin-min.css" type="text/css" rel="stylesheet">
  <link href="../min/custom-min.css" type="text/css" rel="stylesheet" >

  <!-- Reg form CSS -->
  <link rel="stylesheet" type="text/css" href="css/imacreg.css" media="all" />
  <link rel="stylesheet" type="text/css" href="../demo.css" media="all" />

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
  require '../navigationBar.php'; 
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
    <br>
    <center>
      <h2 style="color:#A020F0; font-size: 35px">iMac Interview 2018</h2>
    </center>
    <br>
    <div class="container">
      <center>
        <!-- 
        <div class="video">
          <video width="50%" controls="auto">
            <source src="imacLab.mp4">
              Your browser doesn't support the Video.
            </video>
          </div>
        -->
      </center>
      <div  class="form">
        <div id="aboutInterview">
          <p><b>About the Interview</b></p>
          <hr>
          <p>
            iMac lab provides you a platform to improve your skills by learning about the iOS app development which require a dedicated apple system.
            <br><br>
            We are looking for the following skills in a Coordinator:
              <ul id="aboutInterview_bullets" style="list-style-type: circle;">
              <li>Good knowledge of Object oriented programming (preferably Swift or Objective C)</li>
              <li>Good oratory skills</li>
              <li>A problem solving approach</li>
              </ul>
            <br>
            As an iMac Coordinator you will manage multiple sessions and teach the development of different apps and will be working application development projects as well.
            <br><br>  
            At the end of your session you will be given a Assistant teaching Certificate and a letter of recommendation.
          </p>
        </div>
        <form id="contactform" action="imacValidate.php" method="post">
          <center><p><b>Register here</b></p></center>
          <hr> 
          REGISTRATIONS HAVE BEEN CLOSED.
        </form> 
      </div>
    </div>
  </div>                         

  <!--Footer-->
  <?php 
  require '../footer.php';
  ?>

  <!--  Scripts-->
  <script src="../min/plugin-min.js"></script>
  <script src="../min/custom-min.js"></script>

</body>
</html>
