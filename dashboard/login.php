<?php 
session_start();
if (isset($_SESSION['userId'])){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <p><b><img src="../img/dashboard_logo.png" alt="" style="width: 50%"></b></p>
      <form class="login-form" method="post" action="login_validate.php" id="loginForm">
        <div class="formgroup">
          <img src="../img/icons/username.png" alt="">
          <input type="text" placeholder="Username" name="loginID"/>
        </div>
        <div class="formgroup">
          <img src="../img/icons/password.png" alt="">
          <input type="password" placeholder="Password" name="loginPassword"/>
        </div>
        <button type="Submit" value="Login" form="loginForm">Login to Dashboard</button>
      </form>
      <!-- <a href="http://www.codestrike.in">CodeStrike</a> -->
    </div>
  </div>
</body>
</html>