<?php
session_start();

if(!$_SESSION['var'])
{
	header("location:index.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/mystyle.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recipe</title>
</head>

<body>
<?php

include("includes/heade.php");
include("includes/menul.php");?>
<center>
<div id="gcontent">
<fieldset id="rec">
<br />


<?php
include("db/config.php");
$data="select * from recipes where title='$_GET[rec]'";
$run=mysqli_query($conn,$data);
echo "<table cellpadding='8'>";

while($row_img=mysqli_fetch_array($run))
{
	$name=$row_img[5];
$title=$row_img[1];
$desc=$row_img[2];
$uname=$row_img[3];
$ing=$row_img[4];
$steps=$row_img[6];
$type=$row_img[7];
$serve=$row_img[8];
$time=$row_img[9];
$q="select fname,lname from users where uname='$uname'";
$run2=mysqli_query($conn,$q);
while($row_name=mysqli_fetch_array($run2)){
$fname=$row_name[0];
$lname=$row_name[1];
echo "
<tr><th colspan='5'><h2>$title</h2></th></tr> <tr><th colspan='4' >By $fname $lname </th> </tr>
<tr><th>Type of Course:</th><td colspan='3'>$type</td></tr>
<div id='imgc'><img src='pics/$name'height='300px' width='300px alt='$name' align='right'/>
  </div>
  <tr><th colspan='3'>Servings:</th><td>$serve</td></tr>
  <tr><th colspan='3'>Cooking time:</th><td>$time</td></tr>
<tr><th colspan='3'>Ingredients:</th><td>$ing</td></tr>
<tr><th colspan='3'>Method:</th><td>$steps</td></tr>";
}}
echo "</tr></table>";

?>


</fieldset>
</div>
</center>
<?php
include("includes/footer.php");
?>
</body>
</html>