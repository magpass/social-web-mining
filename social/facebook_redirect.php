<?php 
// ���� ���� ��
$consumer_key = '135150350025587';
$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/social_web_mining';
 
// �Ķ����
$args = "scope=read_stream,publish_stream,offline_access"
        . "&client_id=" . $consumer_key
        . "&redirect_uri=" . $domain . '/social/facebook_access.php';
 
// ȣ�� uri
$uri = "https://graph.facebook.com/oauth/authorize?" . $args;
 
// redirect
header('Location: ' . $uri);
?>