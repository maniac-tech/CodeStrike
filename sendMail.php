<?php 
require'vendor/autoload.php';

$from = new SendGrid\Email(null, "codestrikehq@gmail.com");
$subject = "CodeStrike Sendgrid trial.";
$to = "maniac.develops@gmail.com";
$content="Hello, Mail sent on 13th Feb";
$mail=new SendGrid\Mail($from, $subject, $to, $content);

$apiKey=getenv('SENDGRID_API_KEY');
$sg= new\SendGrid($apiKey);

$response =  $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
?>