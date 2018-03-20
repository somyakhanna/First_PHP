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
<title>Edit Recipe</title>
<link href="css/mystyle.css" type="text/css" rel="stylesheet"/>
<style>
#editreport th,td{
	padding:6px;
				}
    #editreport
	    {	font-size:16px;
		margin:1% 10% 10% 80%;}
        #editreport legend{
			text-align:left;
			margin-left:0.5%
			}
			
        </style>
        
</head>

<body>
 <?php include("includes/top.php");?>
	<div>
    
  <?php
include("db/config.php");
 $fetch_data="select * from reports where sno='$_GET[sno]' ";
 
 $run=mysqli_query($conn,$fetch_data);
 
 while($row_img=mysqli_fetch_array($run))
 {
	 	$sno=$row_img[0];
		$vname=$row_img[5];
$rfid=$row_img[2];
$reportdate=$row_img[3];
$color=$row_img[6];
$vno=$row_img[4];
$reg=$row_img[7];
$location=$row_img[10];
$theftdate=$row_img[8];
$thefttime=$row_img[9];
$sign=$row_img[11];
 }

?>    
<form method="post" enctype="multipart/form-data">
<fieldset id="editreport">
<legend align="left">Update Report</legend>
<table align="center">

<tr>
<th>RFID Number:</th> <td><input type="text" name="rfid" required value="<?php echo $rfid?>"></td>
</tr>
<tr>
<th>Vehicle Name:</th> <td><input type="text" name="vname" required value="<?php echo $vname?>"></td>
</tr>
<tr>
<th>Vehicle Number:</th> <td><input type="text" name="vnum" required value="<?php echo $vno?>"></td>
</tr>
<tr>
<th>Vehicle Color:</th> <td><input type="text" name="color" required value="<?php echo $color?>"></td>
</tr>
<tr>
<th>Registration Number:</th> <td><input type="text" name="reg" required value="<?php echo $reg?>"></td>
</tr>
<tr>
<th>Theft Date:</th> <td><input type="text" name="tdate" required value="<?php echo $theftdate?>"></td>
</tr>
<tr>
<th>Theft Time:</th> <td><input type="text" name="ttime" required value="<?php echo $thefttime?>"></td>
</tr>
<tr>
<th>Exact Location of Theft:</th> <td><input type="text" name="loc" required value="<?php echo $location?>"></td>
</tr>
<tr><td colspan="2"><?php echo "<img src='pics/$sign' width='100px' height='100px'>";?></td></tr>
<br />
<tr>
<th colspan="5" rowspan="2" >
<input type="submit" style="margin-left:100px;"  name="sub" value="Update" /></th>
</tr>
</table>
</fieldset >
</form>
<?php
include("db/config.php");
if(isset($_POST['sub']))
{$vehino=$_POST['vnum'];
$vname=$_POST['vname'];
$rfid=$_POST['rfid'];
$color=$_POST['color'];
$regno=$_POST['reg'];
$tdate=$_POST['tdate'];
$ttime=$_POST['ttime'];
$loc=$_POST['loc'];
 $uname="$_SESSION[var]";

$update="update reports set vehino='$vehino', thefttime='$ttime',theftdate='$tdate',carname='$vname',rfid='$rfid', color='$color',location='$loc',regno='$regno' where sno='$sno'";
$run=mysqli_query($conn,$update);
if($run)
{
//header("location:showimg.php");
echo "<script>alert('Record Updated');
</script>
";
echo"<script>window.open('majorhome.php','_self')</script>";

	
}
else
{
echo "<script>alert('Error');</script>";	
}
}
?>
</div>
</body>
</html>