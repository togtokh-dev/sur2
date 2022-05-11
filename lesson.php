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
   $results = mysqli_query($db, "SELECT * FROM lesson where lesson_id='$id' ");
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
    				<div class="row page-titles">
    					<ol class="breadcrumb">
    						<li class="breadcrumb-item active"><a href="javascript:void(0)"><?php print_r( $results['lesson_name']); ?></a></li>
    					</ol>
                    </div>
                    <!-- row -->

                    <div class="row">
                      <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Сэдэвийн мэдээлэл</h4>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-sm-4">
                                      <div class="nav flex-column nav-pills mb-3">
                                          <a href="#v-pills-home" data-bs-toggle="pill" class="nav-link show active">Видео</a>
                                          <a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link">Текст</a>
                                          <a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link">Файл</a>
                                          <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">Тест</a>
                                      </div>
                                  </div>
                                  <div class="col-sm-8">
                                      <div class="tab-content">
                                          <div id="v-pills-home" class="tab-pane fade active show">
                                              <p>
                                                  <iframe width="420" height="315" class=" mt-4 mb-4 " src="https://www.youtube.com/embed/<?php print_r( $results['lesson_video']); ?>" id="preview"></iframe>
                                              </p>
                                          </div>
                                          <div id="v-pills-profile" class="tab-pane fade">
                                              <p><?php print_r(htmlspecialchars_decode( $results['lesson_text'])); ?>
                                              </p>
                                          </div>
                                          <div id="v-pills-messages" class="tab-pane fade">
                                              <p><iframe src="<?php print_r( $results['lesson_file']); ?>" height="200" width="300" title="Iframe Example"></iframe>
                                                <a href="<?php print_r( $results['lesson_file']); ?>">Татах</a>
                                                </p>
                                          </div>
                                          <div id="v-pills-settings" class="tab-pane fade">
                                              <p><?php print_r( $results['lesson_test']); ?></p>
                                          </div>
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
