<?php
include('includes/dbcon.php');
session_start();
if (isset($_GET['delete_id']))
{
  $id1 = $_GET['delete_id'];
  $query = "DELETE FROM notes WHERE id=$id1";
  $mysqli->query($query);
}
else {
  continue;
}


?>
