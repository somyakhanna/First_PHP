<?php
session_start();

if(!$_SESSION['var'])
{
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
<link href="css/mystyle.css" type="text/css" rel="stylesheet"/>
</head>

<body>
 <?php include("includes/heade.php");?>
	 <?php include("includes/menul.php");?>
 <div id="gcontent">
      
<form method="post" >
<fieldset id="reg">
<legend>Feedback form</legend>
<table align="center">
<tr>
<th>Rate us:</th><td>
<select name=rate>
<option value="">------------Select------------</option>
<option value="Great">Great</option>
<option value="Good">Good</option>
<option value="Satisfactory">Satisfactory</option>
<option value="Poor">Poor</option>
</select>
</td>
</tr>
<tr>
<th>
Suggestions: </th><td><textarea name="sug" cols="50" rows="10" required placeholder="Write your suggestions here..." ></textarea></td>
</tr>
<tr><th colspan="3">
<input type="submit"  name="sub" value="Submit" /><br /><span>Your feedback is valueable to us !</span></th>
</tr>
</table>
</fieldset >
</form>
<?php
include("db/config.php");
if(isset($_POST['sub']))
{
	$rating=$_POST['rate'];
	$sug=$_POST['sug'];
	$uname=$_SESSION['var'];
		$ins="insert into feedback(username,rating,sug) values('$uname','$rating','$sug')";
$run=mysqli_query($conn,$ins);
if($run)
{
//header("location:showimg.php");
echo "<script>alert('success');</script>";	
}
else
{
echo "<script>alert('Error');</script>";	
}
}
?>
</div>
<?php include("includes/footer.php");?>
</body>
</html>