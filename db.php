<?php
  session_start();
  include './vendor/phpmailer/index.php';
  require_once './vendor/facebook-api/autoload.php';
	$facebook = new \Facebook\Facebook([
		'app_id'      => '1483601108723185',
		'app_secret'     => '8fbb6ef9709b491f558b2499eb320d20',
		'default_graph_version'  => 'v8.0'
	]);
$db = mysqli_connect("ls-3cafb89f8997e4de71cc96223bc939e463dd3be7.c34z5emfo7ly.ap-northeast-1.rds.amazonaws.com", "basic_user", "1234", "sur");
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
date_default_timezone_set("Asia/Ulaanbaatar");
$time=(new DateTime())->format("Y-m-d G:i:s");
$time_short=(new DateTime())->format("Y-m-d");
$host_url="http://localhost/sur2";
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header('location: '.$host_url);
}
$head_form ='<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">';
$secret_key = '6LfqLuEZAAAAABUQ22qlA7d-V4xB9LBZrb1Hl2z6';
$sitekey="6LfqLuEZAAAAAMf7Cce4UaHJxcCdMtN8xnRvUrGi";
$facebook_helper = $facebook->getRedirectLoginHelper();
$facebook_permissions = ['email'];
$facebook_login_url = $facebook_helper->getLoginUrl('http://localhost/sur2/api_login.php', $facebook_permissions);
if(isset($_SESSION['user'])){
  $user_id =$_SESSION['user']['user_id'];
    $user_SESSION = array(
      'logged' => true,
      'user_data'=>$_SESSION['user'],
     );
  }else {
    $user_SESSION = array(
      'logged' => false,
      'user_data'=>'',
     );
  }
 ?>
