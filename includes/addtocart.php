<?php
include("connect.php");
$getd=$_GET['del'];
$query="insert into cart values ('$getd')";

$run=mysqli_query($conn,$query);

if($run)
{
	 echo "<script>alert('Data submited')</script>";
}

?>