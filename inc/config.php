<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('610188305605-d0svgbjvbilhnqmet072cojkbij8jiab.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('ZpWzGahjeJmjZ2OQ0A3WpUdg');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>