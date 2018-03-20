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
<title>Report</title>
<style>
#viewreport th,td{
	padding:6px;
			
	}
    #viewreport
	    {	font-size:16px;
		margin:1% 10% 10% 80%;}</style>
</head>

<body>
<?php

include("includes/top.php");?>
<div >
<fieldset id="viewreport">

<br />


<?php
include("db/config.php");
$data="select * from reports where sno='$_GET[sno]'";
$run=mysqli_query($conn,$data);
echo "<table >";

while($row_img=mysqli_fetch_array($run))
{
	$vname=$row_img[5];
$rfid=$row_img[2];
$reportdate=$row_img[3];
$color=$row_img[6];
$vno=$row_img[4];
$reg=$row_img[7];
$location=$row_img[10];
$theftdate=$row_img[8];
$thefttime=$row_img[9];
echo "
<tr><th colspan='3'><h4>RFID NUMBER<td>:</td</h4></th><th><h4> $rfid </th> </h4></tr>
<tr><th colspan='3'>Dated<td>:</td</th><td>&nbsp; $reportdate</td></tr>
 <tr><th colspan='3'>Vehicle Model<td>:</td</th><td> &nbsp;$vname</td></tr>
  <tr><th colspan='3'>Vehicle Number<td>:</td</th><td>&nbsp;$vno</td></tr>
<tr><th colspan='3'>Vehicle Color<td>:</td</th><td>&nbsp;$color</td></tr>
<tr><th colspan='3'>Registration No<td>:</td</th><td>&nbsp;$reg</td></tr>
<tr><th colspan='3'>Theft Date<td>:</td</th><td>&nbsp;$theftdate</td></tr>
<tr><th colspan='3'>Theft Time<td>:</td</th><td>&nbsp;$thefttime</td></tr>
<tr><th colspan='3'>Location of theft<td>:</td</th><td>&nbsp;$location</td></tr>
<tr><th colspan='3'>Current Status<td>:</td</th><td><h4></h4></td></tr>";
}
echo "</tr></table>";

?>


</fieldset>
</div>


</body>
</html>