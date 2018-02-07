<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$recipientName = "Abhishek Jain";
$recipientEmail = "ajj.2396@gmail.com";

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ["key" => getEnv("SPARKPOST_API_KEY_IMAC_DELIEVERY")]);
$promise = $sparky->transmissions->post([
    
    'substitution_data' => ['name' => 'iMac'],
    'recipients' => [
        [
            'address' => [
                'name' => 'Abhishek Jain',
                'email' => 'ajj.2396@gmail.com',
            ],
        ],
    ],
    'content' => [
        'from' => [
            'name' => 'iMac Atharva',
            'email' => 'imac@codestrike.in',
        ],
        'subject' => 'First Mailing From PHP',
        'html' => '<html>
        <body style="background-color: grey; width:100%; font-family: sans-serif;">
        <table style="background-color: white;margin-left: 5%; margin-right: 5%; margin-top: 5%;margin-bottom: 5%;width: 90%;">
        <tr >
        <td style="width: 100%; border-bottom: solid; border-color: grey; border-width: 1%;">
        <center>
        <img src="http://www.codestrike.in/img/logo.png" alt="" style="width: 25%; align-content: center;">
        </center>
        </td>
        </tr>
        <tr >
        <td>
        <p style="margin-top: 2%; margin-left:2%;margin-right: 2%;">
        Hi {{address.name}},
        </p>
        <p style="margin-left:2%; margin-right: 2%;margin-bottom: 2%;">
        Your Registration has been confirmed.
        You will be receiving the batch and traingin details soon via mail.
        Please make sure you check your <b>Inbox</b> and <b>Spam</b> folder regularly.
        <br><br>
        Thank You,<br>
        Team CodeStrike.
        </p>
        </td>
        </tr>
        </table>
        </body>
        </html>',
        // 'text' => 'Congratulations, {{name}}! You just sent your very first mailing!',
    ]
]);
try {
    $response = $promise->wait();
    echo "try:";
    echo $response->getStatusCode()."\n";
    print_r($response->getBody())."\n";
} catch (\Exception $e) {
    echo $e->getCode()."\n";
    echo $e->getMessage()."\n";
}