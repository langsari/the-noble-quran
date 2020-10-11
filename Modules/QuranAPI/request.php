<?php
require '../../vendor/autoload.php';

use GuzzleHttp\Client;
$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client -> GET (
    'posts/1'
);

var_dump($response);
echo $response ->getBody();
?>