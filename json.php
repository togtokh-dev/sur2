<?php include('db.php') ?>
<?php
	if (isset($_POST['g-recaptcha-response'])) {
		$data=[];

    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
    $errors =false;
    $response_data = json_decode($response);
		if(isset($_SESSION['Captcha'])){
			$response_data->success=$_SESSION['Captcha'];
		}
		if($_POST['type']==='login'){
			$email = e($_POST['email']);

	    $password = e($_POST['password']);

	    $password = md5($password);

	    $email_cheke = mysqli_query($db, "SELECT * FROM users WHERE user_email='$email'  LIMIT 1");

	    if(!$response_data->success){
         $errors = $errors."Captcha баталгаажуулалт амжилтгүй болсон";
	    }else{
				$_SESSION['Captcha']=true;
			}
	    if (mysqli_num_rows($email_cheke) == 1){
	      $pass_cheke = mysqli_query($db, "SELECT * FROM users WHERE user_email='$email' AND user_password='$password' LIMIT 1");
	      if (mysqli_num_rows($pass_cheke) != 1){
           $errors = $errors."Нууц үг буруу";
	      }
	    }else{
	       $errors = $errors."И-мэйл бүртгэгдээгүй байна";
	    }
	    if(!$errors){
	      $logged_in_user = mysqli_fetch_assoc($pass_cheke);
	      $_SESSION['user'] = $logged_in_user;
	      $success =true;
				unset($_SESSION['Captcha']);
	    }else {
	      $success =false;
	    }
	    $data = array(
	     'success'  => $success,
	     'errors'   => $errors,
	    );
		}
		if($_POST['type']==='reg'){
			if(!$response_data->success){
        $errors = $errors."Captcha баталгаажуулалт амжилтгүй болсон";
	    }
			$email = $_POST['email'];
			$email_cheke = mysqli_query($db, "SELECT * FROM users WHERE user_email='$email'  LIMIT 1");
			if (mysqli_num_rows($email_cheke) == 1){
        $errors = $errors."И-мэйл бүртгэлтэй байна";
				$success =false;
			}else{
					$email_error =true;
					if(!$errors){
							$username = $_POST['username'];
							$password_1 =$_POST['password'];
					  	$password = md5($password_1);
							$user_id = user_id_rand();
							$query = "INSERT INTO users ( user_id,user_name, user_email, user_type, user_password,user_role,user_created_date)
										VALUES('$user_id','$username', '$email','not','$password','user','$time')";
							mysqli_query($db, $query);
							//mail_v1($email,'','Бүртгэл үүслээ.');
							$success =true;
					}else{
						$success =false;
					}
			}
			$data = array(
	     'success'  => $success,
	     'errors'   => $errors,
	    );
		}
   echo json_encode($data);
	 die;
	}











	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);
	$_POST = $input;
	if($_POST['type']==='forgot-code'){
		$errors=null;
		$email = e($_POST['email']);
		$email_cheke = mysqli_query($db, "SELECT * FROM users WHERE user_email='$email'  LIMIT 1");
		if (mysqli_num_rows($email_cheke) == 1){
			$code =user_id_rand(6);
			$_SESSION['forgot']['code']=$code;
			$_SESSION['forgot']['mail']=$email;
			email_sent_user_fun($email,'Нууц үг сэргээх','Сэргээх код:'.$code,'Сэргээх код:'.$code);
		}else{
			 $errors = $errors."И-мэйл бүртгэгдээгүй байна";
		}
		if(!$errors){
			$success =true;
		}else {
			$success =false;
		}
		$data = array(
		 'success'  => $success,
		 'errors'   => $errors,
		);
		echo json_encode($data);
	}
	if($_POST['type']==='forgot-code-ver'){
		$errors=null;
		if(isset($_SESSION['forgot'])){
			$code = e($_POST['code']);
      if($code==$_SESSION['forgot']['code']){
				$success =true;
			}else {
				$success =false;
				$errors = $errors."Code таарсангүй";
			}
		}else{
			$errors = $errors."Алдаа";
		}
		$data = array(
		 'success'  => $success,
		 'errors'   => $errors,
		);
		echo json_encode($data);
	}
	if($_POST['type']==='forgot-code-pass'){
		$errors=null;
		$email = $_SESSION['forgot']['mail'];
		$password =$_POST['password'];
		$password = md5($password);
		if (!mysqli_query($db, "UPDATE `users` SET `user_password` = '$password' WHERE `user_email` = '$email';")){
			$errors = $errors."И-мэйл бүртгэгдээгүй байна";
		}
		if(!$errors){
			$success =true;
		}else {
			$success =false;
		}
		$data = array(
		 'success'  => $success,
		 'errors'   => $errors,
		);
		echo json_encode($data);
	}

  function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
  }
	function user_id_rand($length = 10) {
			return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
	}
?>
