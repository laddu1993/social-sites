<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/social-auth/fb-test/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1459174307464450', // Replace {app-id} with your app id
  'app_secret' => '5be12280339255f88646dc2804cdb7c6',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','publish_actions']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/social-auth/facebook-auth.php', $permissions);
header('location: '.$loginUrl);
exit();

?>