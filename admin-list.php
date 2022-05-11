<!DOCTYPE html>
<?php include('server.php'); ?>
<?php
  if (!isLoggedIn()) {
  	header('location: ./login.php');
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
  	<link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
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
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Хэрэглэгчийн мэдээлэл</h4>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="example2" class="display" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>ID</th>
                                              <th>Нэр</th>
                                              <th>Имайл</th>
                                              <th>Үүссэн</th>
                                              <th>Төрөл</th>
                                              <th>Фб ID</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $results = mysqli_query($db, "SELECT * FROM  users");
                                        $count=0;
                                        while ($row = mysqli_fetch_array($results)) {
                                          $count++;
                                        ?>
                                          <tr>
                                              <td><?php print_r($count); ?></td>
                                              <td><?php print_r($row['user_id']); ?></td>
                                              <td><?php print_r($row['user_name']); ?></td>
                                              <td><?php print_r($row['user_email']); ?></td>
                                              <td><?php print_r($row['user_created_date']); ?></td>
                                              <td><?php print_r($row['user_role']); ?></td>
                                              <td><?php print_r($row['user_social_id']); ?></td>
                                          </tr>
                                          <?php } ?>
                                      </tbody>
                                  </table>
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
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
  <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
  <script src="js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
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
