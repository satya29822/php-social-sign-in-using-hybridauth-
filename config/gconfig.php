<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('463489614792-s2js68ldettk6tnqa252mkb399gq1nik.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('z3XLkfMTn8fc7uQ_GnbAQdt_');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/seller2702/vendor_type.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>