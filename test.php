<?php
require 'vendor/autoload.php';

use ElephantIO\Client as ElephantIOClient;

// $client_elephant = ElephantIOClient::create('https://socket.slimmerwerken.app');
$client_elephant = ElephantIOClient::create('http://localhost:3000');
$client_elephant->connect();
$eventType = 'message';
$client_elephant->emit('event_customer_6', [
    'eventType'=> $eventType,
    'userID'=> 60,
    'workStationID' => 45,
    'body' => 'Test message.'
]);
$client_elephant->disconnect();
echo "Run My PHP File";