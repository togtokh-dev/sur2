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
  <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
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

          <div class="row page-titles">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $results['lesson_name']; ?></a></li>
            </ol>
                  </div>

                  <!-- row -->
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-body">
                             <div class="row spno">
                              <form class="tab-pane fade active show" action="update.php" id="form" method="post"  enctype="multipart/form-data">
                                <input type="text" name="lesson_id" value="<?php echo $results['lesson_id'];  ?>" hidden>
                        					<div class="form-group">
                        						<label for="title">Нэр</label>
                        						<input type="text" name="lesson_name" class="form-control" value="<?php echo $results['lesson_name'];  ?>" >
                        					</div>
                                  <div class="form-group" style="position: relative;">
                        						<label for="post">Тухай</label>
                        						<textarea name="lesson_about" id="body_mon_1" class="form-control" cols="30" rows="5" ><?php echo $results['lesson_about'];  ?></textarea>
                        					</div>
                                  <div class="form-group" style="position: relative;">
                        						<label for="post">ТЕКСТ</label>
                        						<textarea name="lesson_text" id="body_mon_2" class="form-control" cols="30" rows="5" ><?php echo $results['lesson_text'];  ?></textarea>
                        					</div>
                                  <div class="form-group">
        														<label for="exampleFormControlFile1">Зөвхөн зураг...</label>
        														<input id="imageFile_img" name="lesson_image" type="file" class="form-control-file" accept="image/*">
                                    <input type="text" name="lesson_image" value="<?php echo $results['lesson_image'];  ?>" hidden>
        													</div>
                                  <div class="form-group">
        														<label for="exampleFormControlFile1">Файл...</label>
        														<input id="imageFile_img_" name="lesson_file" type="file" class="form-control-file" >
                                    <input type="text" name="lesson_file" value="<?php echo $results['lesson_file'];  ?>" hidden>
                                    <a href="<?php echo $results['lesson_file'];  ?>">File</a>
        													</div>
                                  <img src="<?php echo $results['lesson_image'];  ?>" id="preview_img" class="img-fluid m-5 " width="100">
                                  <div class="form-group">
                            				<label for="title">Бичлэгний id</label>
                            				<input type="text" name="lesson_video" value="<?php print_r( $results['lesson_video']); ?>" class="form-control" id="imageFile">
                            			</div>
                                    <iframe width="420" height="315" class=" mt-4 mb-4 " src="https://www.youtube.com/embed/<?php print_r( $results['lesson_video']); ?>" id="preview"></iframe>
                                   <div class="form-group">
                                     <button type="submit" name="update_lesson" class="btn btn-success">Шинэчилэх</button>
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
  <script src="vendor/apexchart/apexchart.js"></script>





    <script src="vendor/dropzone/dist/dropzone.js"></script>
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
    <script src="./vendor/edit/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
    CKEDITOR.replace('body_mon_1', {
			extraPlugins: 'media',
      extraPlugins: 'mathjax',
      language: 'mn',
      mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
      height: 320,
      on: {
          instanceReady: function() {
              this.dataProcessor.htmlFilter.addRules( {
                  elements: {
                      img: function( el ) {
                          if ( !el.attributes.alt )
                              el.attributes.alt = 'An image';
                          el.addClass( 'img-fluid' );
                      },
											iframe: function( el ) {
                          if ( !el.attributes.alt )
                          el.addClass( 'img-fluid' );
                      }
                  }
              } );
          }
      }
    });
    CKEDITOR.replace('body_mon_2', {
			extraPlugins: 'media',
      extraPlugins: 'mathjax',
      language: 'mn',
      mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
      height: 320,
      on: {
          instanceReady: function() {
              this.dataProcessor.htmlFilter.addRules( {
                  elements: {
                      img: function( el ) {
                          if ( !el.attributes.alt )
                              el.attributes.alt = 'An image';
                          el.addClass( 'img-fluid' );
                      },
											iframe: function( el ) {
                          if ( !el.attributes.alt )
                          el.addClass( 'img-fluid' );
                      }
                  }
              } );
          }
      }
    });
			$( '#imageFile' ).keyup(function() {
					$('#preview').attr('src','https://www.youtube.com/embed/'+$(this).val());
			});
      $('#imageFile_img').change(function(evt) {
          var files = evt.target.files;
          var file = files[0];
          if (file) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('#preview_img').attr('src',e.target.result)
              };
              reader.readAsDataURL(file);
          }
      });
		</script>
</body>
</html>
