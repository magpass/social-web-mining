<?php
session_start();

// library �ε�, ���� ���� ��
require_once('./libs/twitteroauth.php');
$consumer_key = 'gqfXgU4EOR8FO6HiFHLSlw';
$consumer_secret = 'YY2lqu0Fp2rrCfub11eEW1FjnrwxmsFgjVGbgm4g9Y';
$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/';

// TwitterOAuth object ����
$connection = new TwitterOAuth($consumer_key, $consumer_secret);

// request token �߱�
$request_token = $connection->getRequestToken($domain . 'social_web_mining/social/twitter_access_token.php');

// ��� Ȯ��
switch ($connection->http_code) {
	case 200:
		
		// ����, token ����
		$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
		$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

		// ���� url Ȯ��   :  ����ڰ� ������ url
		$url = $connection->getAuthorizeURL($token);

		// ���� url (�α��� url) �� redirect
		header('Location: ' . $url);
		break;
		
	default:
		echo 'Could not connect to Twitter. Refresh the page or try again later.';
		break;
}// switch ($connection->http_code)
?>