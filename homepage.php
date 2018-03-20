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
<title>Home</title>
</head>

<body>
<?php include("includes/heade.php");?>
	<?php include("includes/menul.php");?>
	  <?php include("includes/homcon.php");?>
	 <?php include("includes/footer.php");?>
      

</body>
</html>