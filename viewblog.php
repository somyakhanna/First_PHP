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
<title>My Blogs</title>
</head>

<body>
<?php

include("includes/heade.php");
include("includes/menul.php");
?>
<div id="gcontent">
<br />
<h1>My Blogs</h1>
<br />

<?php
include("db/config.php");
$data="select * from dailyblogs where username='$_SESSION[var]'";
$run=mysqli_query($conn,$data);
echo "<ol>";

while($row_img=mysqli_fetch_array($run))
{
$btitle=$row_img[2];
echo "<table id='icon'><tr><td>
<div class='item2'><a href='blog.php?rec=$btitle'><img src='pics/view.png' height='50px' width='50px' id='icon'>
</a>
<span class='caption'>View</span></div></td><td>
<div class='item2'><a href='editblog.php?rec=$btitle'><img src='pics/edit.png' height='50px' width='50px' id='icon'>
</a>
<span class='caption'>Edit</span></div></td><td>
<div class='item2'><a href='delblog.php?rec=$btitle'><img src='pics/del.png' height='50px' width='50px' id='icon'>
</a>
<span class='caption'>Del</span></div></td></tr></table>
<li><h3>$btitle </h3> </li>  
<br>

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