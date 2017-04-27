<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = ' 380417038106-stv1nh4b001grpd5fi04q64rh1mv5bkk.apps.googleusercontent.com ';
$clientSecret = '6GrqsSVSXKEy6svlzH75RrqV';
$redirectURL = 'http://localhost:8080/iips-website/iips_website/';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>