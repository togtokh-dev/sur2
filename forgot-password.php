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
  <title>Сур2 || Нууц үг сэргээх </title>
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
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <?php echo $head_form; ?>

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
                  										<a href="./"><img src="https://www.jing.fm/clipimg/full/107-1075969_free-solve-icon-download-cartoon-light-bulb-png.png" width="90" alt=""></a>
                  									</div>
                                    <h4 class="text-center mb-4">Нууц үгээ мартсан</h4>
                                    <form id="form">
                                        <div class="form-group">
                                            <label><strong>Имэйл</strong></label>
                                            <input type="email" class="form-control" id="email" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group code_">
                                            <label><strong>Баталгаажуулах код</strong></label>
                                            <input type="code" class="form-control" id="code" placeholder="123456">
                                        </div>
                                        <div class="form-group password_">
                                            <label><strong>Шинэ нууц үг</strong></label>
                                            <input type="password" class="form-control" id="password" placeholder="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"  id="submitBtn"  class="btn btn-primary btn-block">ИЛГЭЭХ</button>
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
    let type = "forgot-code";
    $('#submitBtn').prop('disabled', true);
    $('.password_').hide();
    $('.code_').hide();
		// $('#password').keyup(function(){
		// 	if($(this).val()===''){
		// 		$(this).removeClass('is-valid');
		// 		$(this).addClass('is-invalid');
		// 	}else{
		// 		$(this).removeClass('is-invalid');
		// 		$(this).addClass('is-valid');
		// 	}
		// });
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
    $("#form").on('submit', function(e){
         let email = $('#email').val();
         let password = $('#password').val();
         let code = $('#code').val()
         let myDataVar ={
           type:type,
           email:email,
           code:code,
           password:password
         }
         console.log(myDataVar);
         console.log(JSON.stringify(myDataVar));
   		    e.preventDefault();
   		    $.ajax({
   		        type: 'POST',
   		        url: 'json.php',
   		        data: JSON.stringify(myDataVar),
   		        dataType: 'json',
   		        contentType: false,
   		        cache: false,
   		        processData:false,
   		        beforeSend: function(){
   								$('#submitBtn').text('Түр хүлээнэ үү');
   								$('#submitBtn').addClass('spinner spinner-white spinner-right');
   		            $('#submitBtn').prop('disabled', true);
   		            $('#form').css("opacity",".5");
   		        },
   		        success: function(response){
   		          $('#submitBtn').prop('disabled', false);
   							$('#submitBtn').removeClass('spinner spinner-white spinner-right');
   		          $('#form').css("opacity","");
   		          if(response.success){
                  if(type=='forgot-code'){
                    $('.code_').show();
                    $('#email').prop('disabled', true);
                    alert_center("Баталгаажуулах код оруулна уу?","success");
                    type = 'forgot-code-ver';
                    $('#submitBtn').text('Баталгаажуулах');
                  }else if(type=='forgot-code-ver'){
                    $('.password_').show();
                    $('#email').prop('disabled', true);
                    $('#code').prop('disabled', true);
                    alert_center("Шинэ нууц үгээ оруулна уу?","success");
                    type = 'forgot-code-pass';
                    $('#submitBtn').text('Солих');
                  }else if(type=='forgot-code-pass'){
                    alert_center("Нууц үг амжилттай солигдлоо","success",'login.php');
                  }
   		          }else{
   								alert_center(response.errors,"warning");
   		          }
   		        }
   		    });
   		    });

    </script>

</body>

</html>
