<?php
require('vendor/autoload.php');

use Twilio\Rest\Client;


$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");

$formNumber = getenv("TWILIO_FROM_NUMBER");
$toNumber = getenv("MY_PHONE_NUMBER");


$message = 'Assalamu Alaikum Noman! Login Successful into Your Gopon Account...';

$client = new Client($sid, $token);

$result = $client->messages
                  ->create($toNumber,
                
                      ["body" => $message, "from" => $formNumber]
                  );

print($result->sid);

?>

