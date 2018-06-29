<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include_once 'src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1459174307464450', // Replace {app-id} with your app id
  'app_secret' => '5be12280339255f88646dc2804cdb7c6',
  'default_graph_version' => 'v2.2',
  ]);
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;


// We don't have the accessToken
// But are we in the process of getting it ? 
if (isset($_REQUEST['code'])) {

    $helper = $fb->getRedirectLoginHelper();
    try {
        $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    if (isset($accessToken)) {
          // Logged in!
          $_SESSION['facebook_access_token'] = (string) $accessToken;

          // Now you can redirect to another page and use the
          // access token from $_SESSION['facebook_access_token']

          echo "Finally logged in! Token:$accessToken";
    }           
}else {
    // Well looks like we are a fresh dude, login to Facebook!
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'public_actions']; // optional
    $loginUrl = $helper->getLoginUrl('http://altcms.net/backup/fb-test/fb-callback.php', $permissions);

    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}

$data = [
  'message' => 'My awesome photo upload example.',
  'source' => $fb->fileToUpload('../assets/images/1.jpg'),
];

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/photos', $data, $accessToken->getValue());
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

echo 'Photo ID: ' . $graphNode['id'];


// Logged in
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('{app-id}'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;



?>