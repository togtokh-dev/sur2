<?php include('db.php') ?>
<?php
	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);
	array_push($_POST,$input);
	if (isset($_POST['update_class'])) {
		if($_FILES["class_image"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["class_image"]["name"]);
			$class_image=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["class_image"]["tmp_name"]);
			move_uploaded_file($_FILES["class_image"]["tmp_name"], $target_file);
		}else{
			$class_image = $_POST['class_image'];
		}
		$class_id=$_POST['class_id'];
		$class_name=$_POST['class_name'];
		$class_amount=$_POST['class_amount'];
		$class_sell=$_POST['class_sell'];
		$class_about=htmlentities($_POST['class_about']);
		$class_video=$_POST['class_video'];
		$query = "UPDATE `class` SET `class_name` = '$class_name',`class_amount` = '$class_amount',`class_sell` = '$class_sell',`class_about` = '$class_about',`class_video` = '$class_video', `class_image` = '$class_image' WHERE  `class_id` = '$class_id';";
		if(mysqli_query($db, $query)){
			header('location: ./admin-class-ed.php?id='.$class_id);
		}else{
			header('location: ./admin-class.php');
		}
	}
	if (isset($_POST['update_class_subject'])) {
		if($_FILES["cj_image"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["cj_image"]["name"]);
			$cj_image=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["cj_image"]["tmp_name"]);
			move_uploaded_file($_FILES["cj_image"]["tmp_name"], $target_file);
		}else{
			$cj_image = $_POST['cj_image'];
		}
		$cj_id=$_POST['cj_id'];
		$cj_name=$_POST['cj_name'];
		$query = "UPDATE `class_subject` SET `cj_name` = '$cj_name' , `cj_image` = '$cj_image' WHERE  `cj_id` = '$cj_id';";
		if(mysqli_query($db, $query)){
			header('location: ./admin-cj-ed.php?id='.$cj_id);
		}else{
			header('location: ./admin-class.php');
		}
	}
	if (isset($_POST['update_lesson'])) {
		if($_FILES["lesson_image"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["lesson_image"]["name"]);
			$lesson_image=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["lesson_image"]["tmp_name"]);
			move_uploaded_file($_FILES["lesson_image"]["tmp_name"], $target_file);
		}else{
			$lesson_image = $_POST['lesson_image'];
		}
		if($_FILES["lesson_file"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["lesson_file"]["name"]);
			$lesson_file=$host_url.'/'.$target_file;
			//$lesson_file=htmlspecialchars($lesson_file);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["lesson_file"]["tmp_name"]);
			move_uploaded_file($_FILES["lesson_file"]["tmp_name"], $target_file);
		}else{
			$lesson_file = $_POST['lesson_file'];
		}
		print_r($_POST);
		$lesson_id=$_POST['lesson_id'];
		$lesson_name=$_POST['lesson_name'];
		$lesson_about=$_POST['lesson_about'];
		$lesson_text=$_POST['lesson_text'];
		$lesson_video=$_POST['lesson_video'];
		$query = "UPDATE `lesson` SET `lesson_name` = '$lesson_name' , `lesson_image` = '$lesson_image' , `lesson_file` = '$lesson_file' , `lesson_about` = '$lesson_about' , `lesson_text` = '$lesson_text' , `lesson_video` = '$lesson_video' WHERE  `lesson_id` = '$lesson_id';";
		if(mysqli_query($db, $query)){
			header('location: ./admin-lesson-ed.php?id='.$lesson_id);
		}else{
			header('location: ./admin-class.php');
		}
	}
	function user_id_rand($length) {
			return substr(str_shuffle(str_repeat($x='0123456789qwertyuiopasdfghjklzxcvbnm', ceil($length/strlen($x)) )),1,$length);
	}
?>
