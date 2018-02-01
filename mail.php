<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key'=>getenv('SPARKPOST_API_KEY_IMAC_DELIEVERY')]);

$promise = $sparky->transmissions->post([
    'content' => [
        'from' => [
            'name' => 'CodeStrike',
            'email' => 'codestrikehq@gmail.com',
        ],
        'subject' => 'First Mailing From PHP',
        'html' => '<html><body><h1>Congratulations, {{name}}!</h1><p>You just sent your very first mailing!</p></body></html>',
        'text' => 'Congratulations, {{name}}!! You just sent your very first mailing!',
    ],
    'substitution_data' => ['name' => 'YOUR_FIRST_NAME'],
    'recipients' => [
        [
            'address' => [
                'name' => 'Abhishek Jain',
                'email' => 'ajj.2396@gmail.com',
            ],
        ],
    ],
    'cc' => [
        [
            'address' => [
                'name' => 'Abhishek Jha',
                'email' => 'ajha025@gmail.com',
            ],
        ],
    ],
    'bcc' => [
        [
            'address' => [
                'name' => 'CodeStrike',
                'email' => 'codestrikehq@gmail.com',
            ],
        ],
    ],
]);

$sparky->setOptions(['async' => false]);
try {
    $response = $sparky->transmissions->get();
    
    echo("try:");
    echo $response->getStatusCode()."\n";
    print_r($response->getBody())."\n";
}
catch (\Exception $e) {
    echo $e->getCode()."\n";
    echo $e->getMessage()."\n";
}
?>
?>