<?php 
    require 'login_connect.php';
    session_start();
    if(!isset($_SESSION['userId'])){
        header('Location:login.php');
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin - CodeStrike</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <p>Successful in your attempt.</p>
    </body>
</html>
