<?php

// Author: Uğur KILCI

function discord_webhook(
    $url,
    $content
) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(
        "content" => $content
    )));
    curl_exec($curl);
}

discord_webhook(
  "Discord Webhook URL",
  "Hello World!"
);
