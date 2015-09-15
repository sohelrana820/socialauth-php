<?php
session_start();
require 'vendor/autoload.php';
$facebook = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Facebook('http://localhost/php-socialauth/'));

if($facebook->isAuthenticated())
{
    echo 'Loggedin';
}
else{
    echo '<a href="'.$facebook->getLoginUrl().'">Login with facebook</a>';
}
?>