<!DOCTYPE html>
<?php include('server.php'); ?>
<html lang="en" class="h-100">

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
  <title>Сур2 </title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.jing.fm/clipimg/full/107-1075969_free-solve-icon-download-cartoon-light-bulb-png.png">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/add.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style media="screen">
  .form-control.is-invalid {
    border-right: 1px #f72b50 solid !important;
  }
  .form-control.is-valid {
    border-right:1px #2bc155 solid !important;
  }
  </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                									<div class="text-center mb-3">
                										<a href="../"><img src="https://www.jing.fm/clipimg/full/107-1075969_free-solve-icon-download-cartoon-light-bulb-png.png" width="90" alt=""></a>
                									</div>
                                    <h4 class="text-center mb-4">Бүртгэлдээ нэвтэрнэ үү</h4>
                                    <form id="login" >
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Имэйл</strong></label>
                                            <input type="email" id="email" class="form-control" name="email"  placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Нууц үг</strong></label>
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                         		<div class="g-recaptcha" data-sitekey="<?php echo $sitekey; ?>"></div>
                                            <input type="text" name="type" value="login" hidden>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ms-1">
                      													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                      													<label class="custom-control-label" for="basic_checkbox_1">Намайг сана</label>
                      												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="../forgot-password.php">Нууц үгээ мартсан?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" id="submitBtn" class="btn btn-primary btn-block">Нэвтрэх</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                      <p>Танд бүртгэл байхгүй юу? <a class="text-primary" href="./register.php">Бүртгүүлэх</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
  	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <?php include('./alert.php'); ?>
    <script type="text/javascript">
    $('#submitBtn').prop('disabled', true);
		$('#password').keyup(function(){
			if($(this).val()===''){
				$(this).removeClass('is-valid');
				$(this).addClass('is-invalid');
			}else{
				$(this).removeClass('is-invalid');
				$(this).addClass('is-valid');
			}
		});
		$('#email').keyup(function(){
			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!regex.test($(this).val())) {
				$(this).removeClass('is-valid');
				$(this).addClass('is-invalid');
				$('#submitBtn').prop('disabled', true);
			}else{
				$(this).removeClass('is-invalid');
				$(this).addClass('is-valid');
				$('#submitBtn').prop('disabled', false);
			}

		});

    $("#login").on('submit', function(e){
   		    e.preventDefault();
   		    $.ajax({
   		        type: 'POST',
   		        url: 'json.php',
   		        data: new FormData(this),
   		        dataType: 'json',
   		        contentType: false,
   		        cache: false,
   		        processData:false,
   		        beforeSend: function(){
   								$('#submitBtn').text('Түр хүлээнэ үү');
   								$('#submitBtn').addClass('spinner spinner-white spinner-right');
   		            $('#submitBtn').prop('disabled', true);
   		            $('#login').css("opacity",".5");
   		        },
   		        success: function(response){
   		          $('#submitBtn').prop('disabled', false);
   							$('#submitBtn').removeClass('spinner spinner-white spinner-right');
   							$('#submitBtn').text('Нэвтрэх');
   		          $('#login').css("opacity","");
   		          if(response.success){
   								 alert_center("Нэвтэрлээ","success","index.php");
   		          }else{
   								alert_center(response.errors,"warning");
   		          }
   		        }
   		    });
   		    });

    </script>
</body>

</html>
