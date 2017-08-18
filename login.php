<?php 
  session_start();
  if (isset($_SESSION['userId'])){
    header('Location: adminTest.php');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="hq_style.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="login_validate.php">
      <input type="text" placeholder="username" name="loginID"/>
      <input type="password" placeholder="password" name="loginPassword"/>
      <input type="Submit" value="Login">
      <p class="message">Not registered? <a href="membership2017.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>