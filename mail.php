<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ["key" => getEnv("SPARKPOST_API_KEY_IMAC_DELIEVERY")]);
$promise = $sparky->transmissions->post([
    'content' => [
        'from' => [
            'name' => 'SparkPost Team',
            'email' => 'imac@codestrike.in',
        ],
        'subject' => 'First Mailing From PHP',
        'html' => '<html>
        <body style="background-color: grey; width:100%;">
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
        <p>
        Hi User,
        </p>
        <p>
        Your Registration has been confirmed.
        You will be receiving the batch details and other event details soon via mail.
        Make sure you check your Inbox and <b>Spam</b> folder regularly.
        <br>
        Thank You,<br>
        Team CodeStrike.
        </p>
        </td>
        </tr>
        </table>
        </body>
        </html>',
        // 'text' => 'Congratulations, {{name}}! You just sent your very first mailing!',
    ],
    'substitution_data' => ['name' => 'iMac'],
    'recipients' => [
        [
            'address' => [
                'name' => 'Abhishek Jain',
                'email' => 'ajj.2396@gmail.com',
            ],
        ],
    ],
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