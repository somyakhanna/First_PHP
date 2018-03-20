<?php
include("db/config.php");
$get_del_url=$_GET['sno'];
$del_query="delete from reports where sno='$get_del_url'";

$run=mysqli_query($conn,$del_query);

if($run)
{
	 echo "<script>window.open('majorhome.php','_self')</script>";
}
?>
