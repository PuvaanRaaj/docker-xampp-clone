<?php

echo "<h2>Docker-XAMPP-Clone running PHP ".PHP_VERSION."</h2>";

// Try curl to host.docker.internal
$url = 'http://host.docker.internal:3000';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) {
    echo "<p style='color:red;'>Failed to connect to host.docker.internal:3000</p>";
    echo "<pre>" . curl_error($ch) . "</pre>";
} else {
    echo "<p style='color:green;'>Success! Response from host.docker.internal:3000:</p>";
    echo "<pre>" . htmlspecialchars(substr($response, 0, 200)) . "</pre>";
}
curl_close($ch);
