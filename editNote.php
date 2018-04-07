<?php
session_start();
if (isset($_POST['submit']))
{
	include('includes/dbcon.php');
	$id = $_GET['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$user_id = $_SESSION['id'];
	$query = "UPDATE notes SET title='$title', content='$content', user_id='$user_id' WHERE id=".$id;
	if ($mysqli->query($query) === TRUE)
	{
		$_SESSION['success'] = "Note successfully updated.";
    	header('Location: profile.php');
	} else
	{
    	echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
}

?>
<?php
// session_start();
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
  <title> Edit Note </title>      
</head>
<body>
<body>
	<div class="container" style="position:relative;">
	  <?php
	  include('./includes/dbcon.php');


	  ?>

	<section>

      	<h3 class="welcome"> welcome<strong style="color:red;"> <?php echo  $_SESSION['username']; ?></strong> </h3>
        <a href="logout.php" class="logoutLink">Logout</a>
		<div class="noteForm">
			<h3>Edit Note</h3>
			<form method="POST" id="editNote">
				<?php
				$note_id = $_GET['id'];
				$query = "SELECT * FROM notes WHERE id=$note_id";
				$result =$mysqli->query($query);
				$row  = $result->fetch_object();
			 ?>

				<label>title</label>
				<input type="text" class="form-control" name="title" value="<?php echo $row->title;?>" required>
				<br>
				<label>Content</label>
				<textarea  class="form-control" name="content" required><?php echo $row->content;?></textarea>
				<br>

				<input type="submit" name="submit" class="submitBtn" value="Save">
				<button style="margin-left:53%"><a href="profile.php">Cancel</a></button>
			</form>
		</div>
	</section>
</div>
<script type="text/javascript">
  $(document).ready(function(){
// creating note form validating and submitting using jquery and ajax
      $("#editNote").validate({
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

        submitHandler: function(form){

            form.submit();
        }
    });


 });
  </script>

</body>
</html>
