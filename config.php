<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'qdtbhys4105');
define('DB_NAME', 'intra_panel');
define('DB_USER_TBL', 'users_google');

// Google API configuration
define('GOOGLE_CLIENT_ID', '610188305605-pi5hc2lvbpg843c4tfk0iitjk64ldqtb.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'kpWO6FDPUKihEh5eknkH8rAu');
define('GOOGLE_REDIRECT_URL', 'http://www.mundoprotexa.mx');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to Mundo Protexa');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);