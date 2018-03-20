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
<title>About us</title>
</head>

<body>
<?php include("includes/heade.php");?>
	<?php include("includes/menul.php");?>
	  <div id="content">
    <div id="top_con">
    <img id="logo" src="pics/logo.jpg" width="200px" height="200px" onClick="about.php">
    </div>
    
    <div id="bot_con">
    
    
    <div id="what">
    
    <h1>Contact us</h1>
    <b>Food Tree</b><br />
    C-134/F Surya Nagar<br />
    Ghaziabad<br />
    Uttar Pradesh<br />
    201010<br />
    somya9.8khanna@gmail.com<br />
    +919650064448<br />
    
   
    <p>Cheers<br />Somya Khanna
    </div>
    </div>
    </div>
	 <?php include("includes/footer.php");?>
      

</body>
</html>
</body>
</html>