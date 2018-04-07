<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location:index.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php
    include('./includes/header.php');
  ?>
  <title>
   <?php echo  $_SESSION['username']."'s Notes";?>
  </title>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Nav">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="../copieded/profile.php" style="font-family: 'Schoolbell', cursive; font-size:4vh; margin-left:20vw;">Scribb&#x270E;e! </a>
  				<!-- <button type="button" class="btn btn-success navbar-btn">&#8631; 	Note</button> -->

  			</div>

  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav navbar-right" id="Nav">
  					<li><a href="logout.php" id="nav-logout">Logout</a></li>
  				</ul>
  			</div>
  		</div>
  	</nav>
<div class="container-fluid profile">
  <?php
  include('./includes/dbcon.php');

  if (isset($_SESSION['success']) && !empty($_SESSION['success'])):
  ?>
      <div class="success profile_page" style='margin-top:6vh;'>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']); ?>
      </div>
    <?php
  endif
  ?>




<?php ?>

      <h3 class="welcome"> Welcome<strong style="color:red;"> <?php echo  $_SESSION['username']; ?></strong> </h3>


      <div class="noteForm" style="display:;">
      <!-- Form to create note -->
        <form method="POST" id="createForm">
            <h3 id="createNote">Make a note</h3>
        <div class="form-group">
          <div class="col-lg-offset-3 col-lg-6">
          <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Title">
          <br/>
          </div>
        </div>
          <div class="form-group">
            <div class="col-lg-offset-3 col-lg-6">
              <textarea  class="form-control" name="content" id="content" placeholder="Scribble here!"></textarea>
              <br>
            </div>
          </div>
          <!-- <button><a href="profile.php">Cancel</a></button>  -->
          <div class="col-lg-offset-3 col-lg-6">
            <button name="submit" id="add" class="btn btn-primary submitBtn">Add</button>
          </div>
        </form>
      </div>

  </div>


  <div id="displayNotes" class="container-fluid dispNote">
 <!--  view notes -->
  <h2 id="noteSectionHeading">Notes</h2>
      <?php include('showNote.php');?>
  </div>



<script type="text/javascript">
  $(document).ready(function(){
// creating note form validating and submitting using jquery and ajax
      $("#createForm").validate({
        rules:{
            title:{
                required:true,
            },

            content:{
                required: true,
           },

        },

        messages:{
            title:{
                required: "Title missing.",
            },

            content:{
                required: "Please specify some content.",

            }

        },

        submitHandler: submitForm
    });

    function submitForm(){
      var data = $('#createForm').serialize();
      //Converting into JSON file

          $.ajax({
            type: 'GET',
            url: 'showNote.php',

            data: data,
            success: function(d) {
                $('#title').val('');
                $('#content').val('');

                $('#displayNotes').html(d);
                $('.success').text('created');
                $(function() {
                  $(".notes").each(function() {

                    $(this).css("background-color", colours[Math.floor(Math.random()*colours.length)]);
                  });
                });
            }
          });
    }


 });
  </script>

</div>


</body>
</html>
