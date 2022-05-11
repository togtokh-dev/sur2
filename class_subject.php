<!DOCTYPE html>
<?php include('server.php'); ?>
<?php
  if (!isLoggedIn()) {
  	header('location: ./login.php');
  }
 ?>
 <?php
 if(isset($_GET['id'])){
   $id=$_GET['id'];
   $results = mysqli_query($db, "SELECT * FROM class_subject where cj_id='$id' ");
   $results = mysqli_fetch_assoc( $results);
 }else{
   header('location: ./classes.php');
 }

 ?>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html" />
	<meta name="format-detection" content="telephone=no">
  <title>Нүүр || Сур2 </title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.jing.fm/clipimg/full/107-1075969_free-solve-icon-download-cartoon-light-bulb-png.png">
  <link href="css/add.css" rel="stylesheet">
  <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
  <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
  <style media="screen">
    .shadow_user{
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
  </style>
</head>
<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
      <?php include('./components/header.php') ?>
      <?php include('./components/sidebar.php') ?>
      <div class="content-body">
        <div class="container-fluid">
                     <div class="row">
     					<div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
     						<div class="row">
     							<div class="col-xl-12 col-lg-6 ">
     								<div class="card h-auto">
     									<div class="card-body text-center">
     										<img src="<?php print_r($results['cj_image']); ?>" width="150" class="rounded-circle mb-4" alt="">
     										<h4 class="mb-3 text-black font-w600"><?php print_r($results['cj_name']); ?></h4>
     									</div>
     									<!-- <div class="card bg-secondary sticky mb-0">
     										<div class="card-header border-0 pb-0">
     											<h5 class="card-title text-white mt-2">Note Order</h5>
     										</div>
     										<div class="card-body pt-3">
     											<p class="fs-14 op7 text-white"></p>
     										</div> -->
     										<!-- <div class="card-footer border-0 py-4 bg-warning rounded-xl">
     											<div class="media align-items-center">
     												<img class="me-3 img-fluid rounded-circle" width="50" src="images/delivery.png" alt="DexignZone">
     												<div class="media-body">
     													<h5 class="my-0 text-white">6 The Avenue, <br>London EC50 4GN</h5>
     												</div>
     											</div>
     										</div> -->
     									<!-- </div> -->
     								</div>
     							</div>
     						</div>
     					</div>
     					<div class="col-xl-9 col-xxl-8 col-lg-12 col-md-12">
     						<div class="row">
     							<div class="col-xl-12">
     								<div class="card">
     									<div class="card-body pt-2">
     										<div class="table-responsive ">
     											<table class="table items-table">
     												<tbody><tr>
                              <th class="my-0 text-black font-w500 fs-20">Дугаар</th>
     													<th class="my-0 text-black font-w500 fs-20">Нэр</th>
     													<th style="width:20%;" class="my-0 text-black font-w500 fs-20">Үүссэн</th>
     													<th></th>
     												</tr>
                            <?php
                            $results_card = mysqli_query($db, "SELECT * FROM `lesson` where cj_id = '$id'");
                            $count=0;
                            while ($row = mysqli_fetch_array($results_card)) {
                              $count++;
                            ?>
     												<tr>
                              <td>
     														<h4 class="my-0 text-secondary font-w600">#<?php echo $count; ?></h4>
     													</td>
     													<td>
     														<div class="media">
     															<a href="./lesson.php?id=<?php echo $row['lesson_id']; ?>"><img class="me-3 img-fluid rounded" width="85" src="<?php echo $row['lesson_image']; ?>" alt="DexignZone"></a>
     															<div class="media-body">
     																<small class="mt-0 mb-1 font-w500"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
     																<h5 class="mt-0 mb-2 mb-4"><a class="text-black" href="ecom-product-detail.html"><?php echo $row['lesson_name']; ?></a></h5>

     															</div>
     														</div>
     													</td>
     													<td>
     														<h4 class="my-0 text-secondary font-w600"><?php echo $row['lesson_created_date']; ?></h4>
     													</td>
     												</tr>
                          <?php } ?>
     											</tbody></table>
     										</div>
     									</div>
     								</div>
     							</div>
                	</div>
     					</div>
     				 </div>
                 </div>
</div>
      <div class="footer">
          <div class="copyright">
              <p>Сур сур бас дахин сур</p>
          </div>
      </div>
    </div>
    <script src="vendor/global/global.min.js"></script>
	  <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
  	<script src="js/deznav-init.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/peity/jquery.peity.min.js"></script>
	  <script src="vendor/apexchart/apexchart.js"></script>
  	<script src="js/dashboard/analytics.js"></script>
</body>
</html>
