<?php
  session_start();
  require_once './vendor/facebook/graph-sdk/src/Facebook/autoload.php';
	$facebook = new \Facebook\Facebook([
		'app_id'      => '467598577547586',
		'app_secret'     => '6031c337ef22d94a6cf4dfc55975a27b',
		'default_graph_version'  => 'v8.0'
	]);
$db = mysqli_connect("localhost", "admin", "89893218", "sur");
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
date_default_timezone_set("Asia/Ulaanbaatar");
$time=(new DateTime())->format("Y-m-d G:i:s");
$time_short=(new DateTime())->format("Y-m-d");
$host_url="http://localhost/dashboard";
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header('location: '.$host_url);
}
$head_form ="";
$secret_key = '6LfqLuEZAAAAABUQ22qlA7d-V4xB9LBZrb1Hl2z6';
$sitekey="6LfqLuEZAAAAAMf7Cce4UaHJxcCdMtN8xnRvUrGi"
 ?>
