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
                                    <h4 class="text-center mb-4">Бүртгэлээ бүртгүүлнэ үү</h4>
                                    <form id="Register">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Хэрэглэгчийн нэр</strong></label>
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Хэрэглэгчийн нэр">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Имэйл</strong></label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Нууц үг</strong></label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="<?php echo $sitekey; ?>"></div>
                                            <input type="text" name="type" value="reg" hidden>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" id="submitBtn" class="btn btn-primary btn-block">Бүртгүүлэх</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Бүртгэлтэй юу? <a class="text-primary" href="./login.php">Нэвтрэх</a></p>
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
      $('#username').keyup(function(){
        if($(this).val()==='') {
          $(this).removeClass('is-valid');
          $(this).addClass('is-invalid');
        }else{
          $(this).removeClass('is-invalid');
          $(this).addClass('is-valid');
        }
      });
      $('#password').keyup(function(){
  			if($(this).val()===''){
  				$(this).removeClass('is-valid');
  				$(this).addClass('is-invalid');
  			}else{
  				$(this).removeClass('is-invalid');
  				$(this).addClass('is-valid');
  			}
  		});
      $("#Register").on('submit', function(e){
						 e.preventDefault();
		        if($("#username").val() != '' && $("#email").val() !='' ){
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
										$('#submitBtn').text('Бүртгүүлэх');
		                $('#submitBtn').prop('disabled', false);
		                $('#login').css("opacity","");
		                console.log(response);
		                if(response.success){
											alert_center("Бүртгүүл үүслээ","success","login.php");
		          			}else{
		          				alert_center(response.errors,"warning");
		          			}
		          		}
		          });
		        } else{
							 alert_center("Та зарим зүйлсийг орхигдуулсан байна","warning");
		        }
      });
</script>
</body>
</html>
