<?php session_start();
include("includes/toppolice.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit status</title>
<style>
#all{margin-left:38%;
float:none;
text-align:center;
	padding:10px;
	}
	#all td,th{
		padding:0.4% 0% 1% 0%;
		font-size:18px;
		
		}
		
    
    </style>

</head>

<body>
<h3 align="center">Report</h3>
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
		   $que="SELECT * from user1 where username='$username'";
 $run3=mysqli_query($conn,$que);
 while($rown=mysqli_fetch_array($run3)){

 $uname=$rown[0];
	 $fname=$rown[1];
	 $lname=$rown[2];
	 if(($run3)){
  //-display the result of the array
    echo "<div id='all'><table  align='center'><form method='post' enctype='multipart/form-data'>
	 <tr><th>Name</th><th>:</th><th>&nbsp;</th><th>$fname $lname</th></tr>
	 <tr><th>RFID Number</th><th>:</th><th>&nbsp;</th><th>$rfid</th></tr>
	 <tr><td>Vehicle Model</td><td>:</td><td>&nbsp;</td><td>$vname</td></tr>
	 <tr><td>Vehicle Number</td><td>:</td><td>&nbsp;</td><td>$vno</td></tr>
	 <tr><td>Vehicle Color</td><td>:</td><td>&nbsp;</td><td>$color</td></tr>
	<tr><td>Registration Number</td><td>:</td><td>&nbsp;</td><td>$reg</td></tr>
	<tr><td>Dated</td><td>:</td><td>&nbsp;</td><td>$reportdate</td></tr>
	<tr><th>Status</th><td>:</td><td>&nbsp;</td><td><input type='text' name='status'></td></tr>
	<tr>
<th colspan='4' rowspan='2' >
<input type='submit' style='margin:15px 0px 0px 135px;' name='sub' value='Update' /></th>
</tr>	</form>
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
  <?php
include("db/config.php");
if(isset($_POST['sub']))
{
 $pname=$_SESSION['var']; 
  $status=$_POST['status'];
  $udate=date("Y-m-d");
$update="update reports set status='$status', updatedby='$pname',updationdate='$udate' where rfid='$rfid'";

if((mysqli_query($conn,$update)))
{
	echo "<script>alert('Details Updated')</script>";
	echo("<script>location.href = 'policehome.php';</script>");
}

else
{
	 echo "<h1 align='center' style='color:red'> Updation Unsuccessful,Try again</h1>";
}
}
?>


  
</body>
</html>