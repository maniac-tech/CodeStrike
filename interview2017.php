<!DOCTYPE html>
<html>
<head>
   <script src="js/jquery.min.js"></script>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
   <meta name="theme-color" content="#2196F3">
   <title>Interview 2017</title>
   <link rel="shortcut icon" type="image/x-icon" href="favicon.png" /> <!--Tab Icon-->

   <!-- CSS  -->
   <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
   <link href="min/custom-min.css" type="text/css" rel="stylesheet" >

   <!-- Timer -->
   <link rel="stylesheet" href="styleTimer.css"> 
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
      require 'navigationBar.php'; 
    ?>


    <!--Event Details-->
    <div class="section scrollspy" id="team">
        <div class="container">
            <div id="regTimer">
                
            
            <h1>Time left to Register</h1>
            <div id="clockdiv">
              <div>
                <span class="days"></span>
                <div class="smalltext">Days</div>
            </div>
            <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div>
                <span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
            </div>
            </div>
        <script type="text/javascript" src="app.js"></script>

    </div>
</div>
</div>
</div>
</div>
</div>                          

<!--Footer-->
<?php 
require 'footer.php';
?>


<!--  Scripts-->
<script src="min/plugin-min.js"></script>
<script src="min/custom-min.js"></script>



</body>
</html>
