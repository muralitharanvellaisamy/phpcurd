<?php
  ob_start();
  include("db.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysqli_query("DELETE FROM sample WHERE id='$delete'");
  if($delete)
  {
	  header("Location:index.php");
  }
  else
  {
	  echo mysqli_error();
  }
  }
  ob_end_flush();
?>