<!DOCTYPE html>
<html>
<head>
  <title>Notes</title>
    <?php
      include('./includes/header.php');
    ?>


</head>
<body>

<div class="container-fluid page">
  <center><h1 id="headingScribble">Scribb&#x270E;e!</h1></center>

<?php
	session_start();
	include('./includes/dbcon.php');
?>


 <?php
  if (isset($_SESSION['username'])):/* redirect to profile if the user is logged in*/
    header('location:profile.php') ;
  else:
?>
<section>
  <?php
  if (isset($_SESSION['success']) && !empty($_SESSION['success'])):
  ?>
      <div class="success">
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']); ?>
      </div>
    <?php
  endif
  ?>
    <div class="row form">

    <h1 id="headLogin">Login</h1>
    <?php
    if (isset($_SESSION['errMsg']) && !empty($_SESSION['errMsg'])):
    ?>
      <div class="success">
        <?php
        echo $_SESSION['errMsg'];
        unset($_SESSION['errMsg']); ?>
        </div>
    <?php
    endif
  ?>


    <form method="POST" id="loginForm" action="login.php" class="form-horizontal">

        <div class="form-group">


        <div class="col-xs-offset-1 col-lg-offset-3 col-xs-10 col-lg-6">
          <input type="text" class="form-control "  name="username" placeholder="Enter username">
        </div>
      </div>



        <div class="form-group">
          <div class=" col-xs-offset-1 col-lg-offset-3 col-xs-10 col-lg-6">
          <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Enter password">
        </div>
      </div>



       <div class="form-group">

          <div class=" col-xs-offset-2 col-lg-offset-4 col-xs-8 col-lg-4">
            <input type="submit" class="submitBtn" name="login" class="btn btn-default" value="Submit">
          </div>
      </div>

    </form>

  <div class="registerLink">
      <center><span class="notUser">Not yet a user?</span>  <a id="signUpLink" href="register.php">Sign up.</a>
    </center></div>

</div>

 </section>
<?php endif ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(#loginForm).fadeIn(slow);
  })

  $(function () {
    $("#loginForm").validate({
        rules:{
            username:{
                required:true,
            },

            pass1:{
                required: true,
                minlength: 6
            },

        },

        messages:{
            username:{
                required: "This field is required",
            },

            pass1:{
                required: "This field is required",
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
        }

     });

 });
</script>

</body>
</html>
