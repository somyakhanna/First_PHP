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
	  
      <div id="gcontent">
      <?php
   include("db/config.php");
   $blogselect="SELECT * FROM dailyblogs where btitle='$_GET[rec]' ";
$run=mysqli_query($conn,$blogselect);
echo "<ul>";
while($row_wise_data=mysqli_fetch_array($run))
{
	$title=$row_wise_data[2];
	$blog=$row_wise_data[3];
echo "<h1>$title </h1><br>  $blog
</div>
";
}
   ?>
      </div>
      </center>
	 <?php include("includes/footer.php");?>
      

</body>
</html>