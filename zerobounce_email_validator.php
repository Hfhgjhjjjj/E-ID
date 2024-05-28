<?php

$apiKey = '4b1285ca88024c5a9be7470a4d6928ba'; // Replace with your ZeroBounce API key
$domain = $_GET['domain'];

$url = 'https://api.zerobounce.net/v2/validate?apikey=' . urlencode($apiKey) . '&email=' . urlencode($domain);

$response = file_get_contents($url);

$data = json_decode($response);

$emails = [];

// Assuming ZeroBounce response contains an array of suggested email addresses
if ($data->status === 'valid') {
    $emails[] = $domain; // If the email is valid, add it to the list
}

echo json_encode(['emails' => $emails]);
?>