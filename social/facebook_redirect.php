<?php 
// 변수 설정 등
$consumer_key = '135150350025587';
$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/social_web_mining';
 
// 파라미터
$args = "scope=read_stream,publish_stream,offline_access"
        . "&client_id=" . $consumer_key
        . "&redirect_uri=" . $domain . '/social/facebook_access.php';
 
// 호출 uri
$uri = "https://graph.facebook.com/oauth/authorize?" . $args;
 
// redirect
header('Location: ' . $uri);
?>