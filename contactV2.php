<?php
// If you are using Composer
require 'vendor/autoload.php';
if(isset($_POST['email'])) {

    $from = new SendGrid\Email(null, "ajj.2396@gmail.com");
    $subject = "Hello World from the SendGrid PHP Library!";
    $to = new SendGrid\Email(null, "codestrikehq@gmail.com");

 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    /*$email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";*/

    $content = new SendGrid\Content("text/plain", "Hello, Email!");

	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	/*mail($email_to, $email_subject, $email_message, $headers);*/  
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    $apiKey = getenv('SENDGRID_API_KEY');
    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($mail);
    echo $response->statusCode();
    echo $response->headers();
    echo $response->body();

?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting me. Will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>