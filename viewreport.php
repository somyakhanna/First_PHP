<?php session_start();
include("includes/toppolice.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
<style>
#all{
	padding:10px;}</style>
</head>

<body>
     
	      <?php
         include("db/config.php");
  $sql="SELECT  * FROM reports WHERE rfid='$_GET[rf]';";
  $result=mysqli_query($conn,$sql);
  while($row_img=mysqli_fetch_array($result)){
          $username=$row_img[1];
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
		   $que="SELECT * from user1 where username='$username'";
 $run3=mysqli_query($conn,$que);
 while($rown=mysqli_fetch_array($run3)){

 $uname=$rown[0];
	 $pass=$rown[4];
	 $fname=$rown[1];
	 $lname=$rown[2];
	 $email=$rown[3];
	 $gen=$rown[5];
	 $phone=$rown[6];
	 $aadhar=$rown[7];
	 $dob=$rown[8];
if(($run3)){
  //-display the result of the array
    echo "<div id='all' style='background-color:#CCC'><h4>User Details</h4></div>
	 <div id='all'><table>
	 <tr><th>Name</th><th>:</th><th>&nbsp;</th><th>$fname $lname</th></tr>
	 <tr><td>Aadhar No.</td><td>:</td><td>&nbsp;</td><td>$aadhar</td></tr>
	 <tr><td>Gender</td><td>:</td><td>&nbsp;</td><td> </td<td>$gen</td></tr>
	 <tr><td>Date Of Birth</td><td>:</td><td>&nbsp;</td><td> </td<td>$dob</td></tr>
	 <tr><td>Phone No.</td><td>:</td><td>&nbsp;</td><td> </td<td>$phone</td></tr>
	 <tr><td>Email</td><td>:</td><td>&nbsp;</td><td>$email</td></tr>
	 </table></div>
	 <div id='all' style='background-color:#CCC'><h4>Vehicle Details</h4></div>
	 <div id='all'><table>
	 <tr><th>RFID Number</th><th>:</th><th>&nbsp;</th><th>$rfid</th></tr>
	 <tr><td>Vehicle Name & Model</td><td>:</td><td>&nbsp;</td><td>$vname</td></tr>
	 <tr><td>Vehicle Number</td><td>:</td><td>&nbsp;</td><td>$vno</td></tr>
	 <tr><td>Vehicle Color</td><td>:</td><td>&nbsp;</td><td>$color</td></tr>
	<tr><td>Registration Number</td><td>:</td><td>&nbsp;</td><td>$reg</td></tr>
	</table></div>
	<div id='all' style='background-color:#CCC'><h4>Theft Details</h4></div>
	<div id='all'><table>
	<tr><td>Theft Date</td><td>:</td><td>&nbsp;</td><td>$theftdate</td></tr>
	<tr><td>Theft Time</td><td>:</td><td>&nbsp;</td><td>$thefttime</td></tr>
	<tr><td>Location of Theft</td><td>:</td><td>&nbsp;</td><td>$location</td></tr>
	<tr><td>Dated</td><td>:</td><td>&nbsp;</td><td>$reportdate</td></tr>
	<tr><td><img src='pics/$sign' style='width:100px; height:100px; '</td></tr>
</table></div>
	 "
;}
else{
  echo  "<p>No Results Found</p>
  ";
  }

   }
   }
  ?>
</body>
</html>