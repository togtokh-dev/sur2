<?php include('db.php') ?>
<?php
	if (isset($_POST['class_name'])) {
		$class_name = $_POST['class_name'];
		$rand_id= user_id_rand(10);
		$query = "INSERT INTO `class` (`class_id`, `class_user_id`, `class_name`, `class_type`, `class_about`, `class_image`, `class_video`, `class_amount`, `class_sell`, `class_created_date`)
		 VALUES ('$rand_id', '$user_id', '$class_name', '', '', 'https://thumbs.dreamstime.com/b/imitation-transparent-background-seamless-vector-illustration-69028332.jpg', '', 0, 0, '$time');";
		if(mysqli_query($db, $query)){
			header('location: ./admin-class-ed.php?id='.$rand_id);
		}else{
			header('location: ./admin-class.php');
		}
	}
	print_r($_POST);
	if (isset($_POST['cj_name'])) {
		$cj_name = $_POST['cj_name'];
		$class_id = $_POST['class_id'];
		$rand_id= user_id_rand(10);
		$query = "INSERT INTO `class_subject` (`cj_id`, `cj_name`, `cj_image`, `class_id`,`cj_created_date`)
		 VALUES ('$rand_id', '$cj_name', '', '$class_id','$time' );";
		if(mysqli_query($db, $query)){
			header('location: ./admin-cj-ed.php?id='.$rand_id);
		}else{
			header('location: ./admin-class-ed.php?id='.$class_id);
		}
	}
	if (isset($_POST['lesson_name'])) {
		$lesson_name = $_POST['lesson_name'];
		$class_id = $_POST['class_id'];
		$cj_id = $_POST['cj_id'];
		$rand_id= user_id_rand(10);
		$query = "INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `cj_id`, `class`,`lesson_created_date`)
		 VALUES ('$rand_id', '$lesson_name', '$cj_id', '$class_id','$time' );";
		if(mysqli_query($db, $query)){
			header('location: ./admin-lesson-ed.php?id='.$rand_id);
		}else{
			header('location: ./admin-cj-ed.php?id='.$cj_id);
		}
	}
	function user_id_rand($length) {
			return substr(str_shuffle(str_repeat($x='0123456789qwertyuiopasdfghjklzxcvbnm', ceil($length/strlen($x)) )),1,$length);
	}
?>
