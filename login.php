$fb = new Facebook\Facebook([
  'app_id' => '1167219026805377', // Replace {app-id} with your app id
  'app_secret' => '4a6622b371db6e85bbdf60b5491b6da6',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
