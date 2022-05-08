<?php
  include('db.php');
  function user_id_rand($length = 10) {
      return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
  }
  if(isset($_SESSION['fb_data'])){
    print_r(@$_SESSION['fb_data']);
    $fb_id = $_SESSION['fb_data']['id'];
    $username = $_SESSION['fb_data']['name'];
    $email = $_SESSION['fb_data']['email'];
    $email_cheke = mysqli_query($db, "SELECT * FROM users WHERE user_social_id='$fb_id' or user_email='$email'  LIMIT 1");
    if (mysqli_num_rows($email_cheke) == 1){
      $logged_in_user = mysqli_fetch_assoc($email_cheke);
      $_SESSION['user'] = $logged_in_user;
      header('location: ./index.php');
    }else{
      $user_id = user_id_rand();
      $query = "INSERT INTO users ( user_id,user_name, user_email, user_type, user_password,user_role,user_created_date,user_social_id)
            VALUES('$user_id','$username', '$email','yes','','user','$time','$fb_id')";
      mysqli_query($db, $query);
      $email_cheke = mysqli_query($db, "SELECT * FROM users WHERE user_social_id='$fb_id' or user_email='$email'  LIMIT 1");
      $logged_in_user = mysqli_fetch_assoc($email_cheke);
      $_SESSION['user'] = $logged_in_user;
      header('location: ./index.php');
    }
  }
    header('location: ./login.php');
 ?>
