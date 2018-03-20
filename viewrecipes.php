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
<title>My recipes</title>
</head>

<body>
<?php

include("includes/heade.php");
include("includes/menul.php");
?>
<div id="gcontent">
<br />
<h1>My recipes</h1>
<br />

<?php
include("db/config.php");
$data="select * from recipes where username='$_SESSION[var]'";
$run=mysqli_query($conn,$data);
echo "<ol>";

while($row_img=mysqli_fetch_array($run))
{$desc=$row_img[2];
$title=$row_img[1];
echo "<table id='icon'><tr><td>
<div class='item2'><a href='recipe.php?rec=$title'><img src='pics/view.png' height='50px' width='50px' id='icon'>
</a>
<span class='caption'>View</span></div></td><td>
<div class='item2'><a href='editrecipes.php?rec=$title'><img src='pics/edit.png' height='50px' width='50px' id='icon'>
</a>
<span class='caption'>Edit</span></div></td><td>
<div class='item2'><a href='delrecipe.php?rec=$title'><img src='pics/del.png' height='50px' width='50px' id='icon'>
</a>
<span class='caption'>Del</span></div></td></tr></table>
<li><h3>$title </h3> </li>  
<br>
$desc
<br><br>";
}

echo "</ol>";
?>
</div>
<?php
include("includes/footer.php");
?>
</body>
</html>