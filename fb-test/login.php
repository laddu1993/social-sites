<?php
session_start();
include_once 'src/Facebook/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
  'app_id' => '1459174307464450', // Replace {app-id} with your app id
  'app_secret' => '5be12280339255f88646dc2804cdb7c6',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','publish_actions']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://altcms.net/backup/fb-test/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';


?>