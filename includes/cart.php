<?php 
session_start();
if(!$_SESSION['var'])
{
header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="logout.php" style="float:right">Logout</a>
<a href="insert_db.php" style="float:right">Add new record</a>
<table border='1'>
<tr>
<th>Number</th>
<th>Name</th>
<th>Price</th>
<th>Photu</th>
</tr>

<?php
include("connect.php");
$fetch_data="select * from items,cart where items.id=cart.id";
$run=mysqli_query($conn,$fetch_data);
while($row_wise_data=mysqli_fetch_array($run))
{
	$name=$row_wise_data[1];
	$mob=$row_wise_data[2];
	$email=$row_wise_data[3];
	$pass=$row_wise_data[4];
	

echo "<tr>
<td>$name</td>
<td>$mob</td>
<td>$email</td>
<td><img src='pics/$pass' height='200px' width='200px' /></td>
<td><a href='addtocart.php?del=$name'>Add to cart</a></td>

</tr>";
}
?>
</table>
</body>
</html>