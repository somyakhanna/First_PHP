
<?php
include("db/config.php");
$get_del_url=$_GET['rec'];
$del_query="delete from recipes where title='$get_del_url'";

$run=mysqli_query($conn,$del_query);

if($run)
{
	 echo "<script>window.open('viewrecipes.php','_self')</script>";
}
?>
