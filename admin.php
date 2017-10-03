<?php 
require 'login_connect.php';
/*
    Checking for session variables, in order to validate the User's presence 
    by the values stored using Session variables.
    If the user's values are set, the dashboard will Load.
    In case if the user is not logged in, he will be taken to login page.
*/
session_start();
if(!isset($_SESSION['userId'])){
    header('Location:login.php');
}
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/adminTest.css">
    <link rel="stylesheet" href="css/data.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <!--
        The navbar is used to show the User Details, such as Username, Contact details, and profile options.
        The navbar acts as the point of information for the user specific operation, such as profile, and logging out.

        Although, the profile option is still under development. 
    -->
    <div id="navbar">
        <p>Welcome, <?php echo $_SESSION['username']; ?></p>
        <form action="logout.php" method="POST">
            <Button type="submit" name="Logout" value="Logout">Logout</Button>
        </form>
    </div>
    <!-- 
        sidebar is used to move around the Dashboard.
        It has the following tabs:
            *Overview
            *iMac
     -->
    <div id="sidebar">
        <a href="http://www.codestrike.in" target="_blank">
            <img src="img/dashboard_logo.png" alt="">
        </a>
        <ul>
            <li title="overview" onclick="loadPage(this.title)">
                <p>Overview</p>
            </li>
            <li title="data" onclick="loadPage(this.title)">
                <p>iMac</p>
            </li>
        </ul>
    </div>
    <div id="body">
        <?php 
        require 'overview.php';
        ?>
    </div>
</body>
<script>
    function loadPage(loadFile){
        $('#body').load(loadFile+".php");
    }
    function loadContent(loadData){
        $('#content').load(loadData+".php");
    }
</script>
</html>