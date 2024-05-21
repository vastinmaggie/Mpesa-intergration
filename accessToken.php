<?php
// mpesa api keys
$consumerKey="8ZQ2GEA0sWbACbjGg2HRcbJrmyvXb4Sl4jZ3eep6IKr9Hg4Q";
$consumerSecret= "JmOmcZwNGPVaSk9xcwg3jvJOtuub7lVA0g8WGTPmduT9PeP4ng93xTq0FzbivUEI";
//access token url
$access_tokens_url ='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_tokens_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey .':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// echo $result;
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);