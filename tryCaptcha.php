<?php 
require_once('imacConnect.php');

$regStatus="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	// Captcha Validation
	$captcha = $_POST['g-recaptcha-response'];
	$captchaSecretKey=	getenv('GOOGLE_RECAPTCHA_SECRET');
	$clientIp = $_SERVER['REMOTE_ADDR'];
	$captchResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaSecretKey."&response=".$captcha);

	if ($captchResponse.success==false){
		echo "FAILED";
	}
	else{
		header('Location:imacValidate.php');
	}
}