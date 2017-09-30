<?php
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key'=>getEnv('SPARKPOST_API_KEY')]);

$sparky->setOptions(['async' => false]);
$results = $sparky->transmission->post([
  'options' => [
    'sandbox' => true
  ],
  'content' => [
    'from'=>'testing@' . getEnv('SPARKPOST_SANDBOX_DOMAIN'),
    'subject'=> 'Oh hey!',
    'html'=>'<html><body><p>Testing SparkPost - the world\'s most awesomest email service!</p></body></html>'
  ],
  'recipients'=>[
    ['address'=>['email'=>'ajj.2396@gmail.com']]
  ]
]);
?>
