
  <?php

// session_start();
if (isset($_POST['submit']))
{
  if (session_status() === PHP_SESSION_NONE){session_start();}
  //From stackoverflow bigtime help
  include('includes/dbcon.php');

  $title = $_POST['title'];
  $content = $_POST['content'];
  $user_id = $_SESSION['id'];
  $query = "INSERT INTO notes (title, content, user_id) VALUES ('$title', '$content', '$user_id')";
  $mysqli->query($query);

    $query1 = "SELECT * FROM notes WHERE user_id=$user_id ORDER BY created_At DESC";
      $result = $mysqli->query($query1);
      if ($result->num_rows > 0)
      {
        while ($row = $result->fetch_object())
        {
          ?>
          <!-- <div class="container-fluid">--><?php


          echo "<div class='col-lg-4 notes'>";
          echo "<button class='btn btn-default'><a id='editBtn' href='editNote.php?id=".$row->id ."'></a>&#x270E;Edit</button>
                <button class='btn btn-danger' id='deleteBtn' data-id='".$row->id ."'>Delete</button>";
          echo "<br>";
          echo "<p>" . $row->created_at . "</p>";
          echo "<h3>" . $row->title . "</h3>";
          echo "<p>" . nl2br($row->content) . "</p>";

          echo "</div>";

          ?>
        <!-- </div> -->
        <?php
        }
      }
} else
{

  $id = $_SESSION['id'];
  $query = "SELECT * FROM notes  WHERE user_id=$id ORDER BY created_at DESC ";
  $result = $mysqli->query($query);
  if ($result->num_rows > 0)
  {
    while ($row = $result->fetch_object())
    {

      echo "<div class='col-lg-4 notes'>";
      echo "<button class='btn btn-default'><a id='editBtn' href='editNote.php?id=".$row->id ."'>&#x270E;Edit</a></button>
            <button  class='btn btn-danger' id='deleteBtn' data-id='".$row->id ."'>Delete</button>";
      echo "<br>";
      echo "<p>" . $row->created_at . "</p>";
      echo "<h3>" . $row->title . "</h3>";
      echo "<p>" . nl2br($row->content) . "</p>";

      echo "</div>";

    }
  }else{
    echo "<p>No notes found</p>";
  }
}
?>
<script type="text/javascript">
  // $(document).ready(function(){
   $("#deleteBtn").click(function(e){

        var id1 = $(this).attr('data-id');
        var btn = $(this);
        $.ajax({
            type: 'POST',
            url: 'deleteNote.php',
            data: { delete_id: id1},
            success: function() {

               btn.parent().remove();
            }

          });
        e.preventDefault();
        //Like return false
    });


  // });
</script>
