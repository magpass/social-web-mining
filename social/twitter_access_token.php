<?php
session_start();

// library �ε�, ���� ���� ��
require_once('./libs/twitteroauth.php');
$consumer_key 	 = 'gqfXgU4EOR8FO6HiFHLSlw';
$consumer_secret = 'YY2lqu0Fp2rrCfub11eEW1FjnrwxmsFgjVGbgm4g9Y';

// Request token �� ������ TwitterOAuth object ����
$connection = new TwitterOAuth($consumer_key, $consumer_secret,
		$_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

// ��ū ����
$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
$token = $access_token['oauth_token'];
$token_secret = $access_token['oauth_token_secret'];

$_SESSION['access_token'] = $token;
$_SESSION['access_token_secret'] = $token_secret;
// token, token_secret, access_token�� DB�� �����Ѵ�.     
print_r($access_token);
?>