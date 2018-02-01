<?php
require 'vendor/autoload.php'

SparkPost::setConfig(["key"=>getEnv("SPARKPOST_API_KEY_IMAC_DELIEVERY")]);
try {
    //Using the transmission of php sdk
    Transmission::send(array('campaign'=>'first-mailing',
            'from'=>'test@' . getEnv("SPARKPOST_SANDBOX_DOMAIN"), // 'test@sparkpostbox.com'
            'subject'=>'Hello from CodeStrike',
            'html'=>'<html><body><h1>Congratulations, {{name}}!</h1><p>You just sent your very first mailing!</p></body></html>',
            'text'=>'Congratulations, {{name}}!! You just sent your very first mailing!',
            'substitutionData'=>array('name'=>'Jeet Bafna'),
            'recipients'=>array(array('address'=>array('name'=>'Abhishek Jain', 'email'=>'ajj.2396@gmail.com' )))
    ));

    echo 'Woohoo! You just sent your first mailing!';
} catch (Exception $err) {
    echo 'Whoops! Something went wrong';     var_dump($err);
}
?>