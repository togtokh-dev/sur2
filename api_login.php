<?php include('db.php'); ?>
<?php
if(isset($_GET['code']))
{
 if(isset($_SESSION['access_token']))
 {
  $access_token = $_SESSION['access_token'];
 }
 else
 {
  $access_token = $facebook_helper->getAccessToken();
  $_SESSION['access_token'] = $access_token;
  $facebook->setDefaultAccessToken($_SESSION['access_token']);
 }
  $graph_response = $facebook->get("/me?fields=name,email", $access_token);
  $facebook_user_info = $graph_response->getGraphUser();
  $user_id=$facebook_user_info['id'];
  if($user_id>0){
    echo 'loading....  <script type="text/javascript">setTimeout("window.close();", 1000);</script>';
    $_SESSION['fb_data']=((array) json_decode($facebook_user_info));
  }
}else{
  header('location: index.php');
}
?>
