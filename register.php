<!DOCTYPE html>
<html>
<head>
	<?php

			include('./includes/header.php');
		?>
	<title>Register</title>


</head>
<body>
	<div class="container-fluid page">
		<?php
			// include('/includes/topNav.php');
		?>
       	<div class="form">

			<center><h1 id="headLogin">Sign up</h1></center>
			<?php
				session_start();
    			if (isset($_SESSION['errMsg']) && !empty($_SESSION['errMsg'])):
    		?>
     		 <div class="success">
       		 <?php
       		 echo $_SESSION['errMsg'];
       		 unset($_SESSION['errMsg']); ?>
       		 </div>
   		 <?php  endif  ?>

			<form method="POST" id="register-form" action="registerFunction.php" class="form-horizontal">
				<div class="form-group register-form">


					<div class="col-lg-offset-3 col-lg-6">
						<input type="text" class="form-control "  name="username" placeholder="Choose Username">
					</div>

				</div>
				<div class="form-group register-form">

					<div class=" col-lg-offset-3 col-lg-6">
						<input type="email" class="form-control" name="email" placeholder="Enter email.">
					</div>

				</div>

				<div class="form-group register-form">

					<div class=" col-lg-offset-3 col-lg-6">
						<input type="password" class="form-control" name="pass1" id="pass1" placeholder="Enter password">
					</div>
				</div>

				<div class="form-group register-form">

					<div class=" col-lg-offset-3 col-lg-6">
						<input type="password" class="form-control" name="pass2" id="pass2" placeholder="Repeat password">
					</div>

				</div>



			<input type="submit" class="submitBtn" name="register" class="btn btn-primary" value="Submit">

				</div>
			</form>

			<div class="registerLink">
			</br>
	        	<center><span>Already a user?</span>	<a id="signUpLink" href="index.php">Login</a></center>
	      	</div>
       </div>

	</div>

<script>


  $(function () {
    $("#register-form").validate({
        rules:{
            username:{
                required:true,

            },
            email:{
                required:true,
                email:true
            },

            pass1:{
                required: true,
                minlength: 6
            },

            pass2:{
                required: true,
                equalTo: '#pass1'
            }

        },

        messages:{
            username:{
                required: "This field is required.",
            },
            email:{
                required: "This field is required.",
                email: "Write a valid email address."
            },
            pass1:{
                required: "This field is required",
                minlength: "Password must be minimum of 6 characters."
            },
            pass2:{
                required: "This field is required.",
                equalTo: "Both passwords must be the same."
            }
        },

        submitHandler: function(form){

            form.submit();
        },
         highlight: function (element, errorClass) {
                 $(element).closest('.form-group').addClass('has-error');
        } ,

        unhighlight: function (element, errorClass) {
            $(element).closest('.form-group').removeClass('has-error');
        },




      });

 });
</script>
</body>
</html>
