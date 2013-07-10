<?php
session_start();
require_once('./libs/twitteroauth.php');
$consumer_key 	 = 'gqfXgU4EOR8FO6HiFHLSlw';
$consumer_secret = 'YY2lqu0Fp2rrCfub11eEW1FjnrwxmsFgjVGbgm4g9Y';

$token					= $_SESSION['access_token'];
$access_token_secret 	= $_SESSION['access_token_secret']; 

// Access token �� ������ TwitterOAuth object ��
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $token, $access_token_secret);

// get user profile
/*
$user = $connection->get('account/verify_credentials');
if($user->error)
{
	print("error");
	die();
}
print_r($user);
print_r($user->lang. '\n');
*/

/*
// get home timeline
$timeline = $connection->get('statuses/home_timeline');
// parameter
//$params = array('count'=>10);
//$timeline2 = $connection->get('statuses/home_timeline', $params);
foreach ($timeline as $status)
{
	print_r($status->text );	
	print_r($status->user->name );
}
*/

$parameters = array('status' => 'test생활입니다.ab');
$status = $connection->post('statuses/update', $parameters);
print_r($status);
print_r($status->id_str);
?>
