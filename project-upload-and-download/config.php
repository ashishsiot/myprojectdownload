<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('628176175401-dsr2vnm0kjotpbm268451873ptrtstv0.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('bC8jeHknAaMr-8mGfb_JJzDk');

//Set the OAuth 2.0 Redirect URI
//$google_client->setRedirectUri('http://localhost/authantication-project/project-upload-and-download/index.php');
$google_client->setRedirectUri('http://localhost/public_html/public_html/v12/index.php');
//$google_client->setRedirectUri('http://localhost/authantication-project/project-upload-and-download/index.php');
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>