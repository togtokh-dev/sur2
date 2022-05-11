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
   $results = mysqli_query($db, "SELECT * FROM class where class_id='$id' ");
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
      <!-- row -->
      <div class="row">
         <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
               <div class="profile-head">
                  <div class="photo-content">
                     <div class="cover-photo rounded"
                      style="background: url(<?php print_r( $results['class_image']); ?>);"
                     ></div>
                  </div>
                  <div class="profile-info">
                     <div class="profile-details">
                        <div class="profile-name  pt-2">
                           <h1 class="text-primary mb-0"><?php print_r( $results['class_name']); ?></h1>
                        </div>
                        <div class="dropdown ms-auto">
                           <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                 </g>
                              </svg>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <!-- <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                              <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                              <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                              <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-4">
            <div class="row">
               <div class="col-xl-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="profile-statistics">
                           <div class="text-center">
                              <div class="row">
                                 <div class="col">
                                    <h3 class="m-b-0">150</h3>
                                    <span>Хичээлүүд</span>
                                 </div>
                                 <div class="col">
                                    <h3 class="m-b-0">140</h3>
                                    <span>Сэдэв</span>
                                 </div>
                                 <div class="col">
                                    <h3 class="m-b-0">45</h3>
                                    <span>Сурагч</span>
                                 </div>
                              </div>
                              <div class="mt-4">
                                 <!-- <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Худалдаж авах</a> -->
                              </div>
                           </div>
                           <!-- Modal -->
                           <div class="modal fade" id="sendMessageModal">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title">Send Message</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                       <form class="comment-form">
                                          <div class="row">
                                             <div class="col-lg-6">
                                                <div class="mb-3">
                                                   <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                   <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="mb-3">
                                                   <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                   <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <div class="mb-3">
                                                   <label class="text-black font-w600 form-label">Comment</label>
                                                   <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <div class="mb-3 mb-0">
                                                   <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="profile-blog">
                           <h5 class="text-primary d-inline">Видео танилцуулга</h5>
                           <iframe width="420" height="315" class=" mt-4 mb-4 " src="https://www.youtube.com/embed/<?php print_r( $results['class_video']); ?>"></iframe>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-8">
            <div class="card">
               <div class="card-body">
                  <div class="profile-tab">
                     <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                           <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show">Хичээлүүд</a>
                           </li>
                           <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">Тухай</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div id="my-posts" class="tab-pane fade active show">
                              <div class="my-post-content pt-3">
                                <div class="tab-pane fade show active" id="monthly">
  											<div class="height500 dz-scroll loadmore-content ps ps--active-y" id="sellingItemsContent">
                          <?php
                          $results_card = mysqli_query($db, "SELECT * FROM `class_subject` where class_id='$id'");
                          while ($row = mysqli_fetch_array($results_card)) {
                          ?>
                          <a href="./class_subject.php?id=<?php echo $row['cj_id']; ?>">
                    			<div class="media mb-4 m-1 p-2 items-list-2 shadow_user">
  													<img class="img-fluid rounded me-3" width="85" src="<?php echo $row['cj_image']; ?>" alt="DexignZone">
  													<div class="media-body col-6 px-0">
  														<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html"><?php echo $row['cj_name']; ?></a></h5>
  														<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">10 Сэдэвтэй</a></small>
  														<span class="text-secondary me-2 fo"></span>
  													</div>
  													<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
  														<!-- <h3 class="mb-0 font-w600 text-secondary">$12.56</h3> -->
  													</div>
  												</div>
                          </a>
                          <?php } ?>
  											<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 500px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 458px;"></div></div></div>

  										</div>
                              </div>
                           </div>
                           <div id="about-me" class="tab-pane fade">
                              <div class="profile-about-me">
                                 <div class="pt-4 border-bottom-1 pb-3">
                                    <h4 class="text-primary">Тухай</h4>
                                    <p class="mb-2"><?php print_r(htmlspecialchars_decode( $results['class_about'])); ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal -->
                     <div class="modal fade" id="replyModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">Post Reply</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                              <div class="modal-body">
                                 <form>
                                    <textarea class="form-control" rows="4">Message</textarea>
                                 </form>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
                                 <button type="button" class="btn btn-primary">Reply</button>
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
