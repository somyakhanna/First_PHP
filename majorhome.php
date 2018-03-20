<?php session_start();
include("includes/top.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script src="plugin/jq.js" type="text/javascript"></script>

<link href="css/mystyle.css" type="text/css" rel="stylesheet"/>
<style>

#menutable td
{color:#FC0;
font-family:Arial, Helvetica, sans-serif;
font-size:20px;
text-align:center;
font-style:!important;
list-style:none;
text-decoration:none;
padding:10px;
}
	#menutable td a
{text-decoration:none;
display:block;
color:#000;
}
#menutable td a:hover
{color:#009;
}
#centery
{height:900px;
width:100%;
border:1px ;
border-bottom: 1px solid #666  ;
float:left;
margin-bottom:10px;
background-color:#FFFF;
margin:auto;
}
#menutable{
	margin:auto;}
#report{
	color:#000000;
	font-size:18px;
	margin:auto;
	}
#report th{
	padding:10px;
	font-weight:bolder;
	color:#000;
	text-align:center;}
#report td
{
	padding:10px;
	
	}
	#report tr
	{border-bottom:solid #999;}
	#report a{
		text-decoration:none;
		color:#666;
		font-weight:bold;
		}
		#report a:hover{
			color:#009;}
			
	
</style>
</head>
<body style="background-color:#FFFFFF">

<div id="centery">
<br />
<?php
   include("db/config.php");

   $user="$_SESSION[var]";
   $report="SELECT fname FROM users where username='$user' ";
$run=mysqli_query($conn,$report);
if($run){
while($row=mysqli_fetch_array($run))
{	
$fname=$row[0];
echo "<h1 style='color:#003366; font-family:Arial, Helvetica, sans-serif;'>Welcome $fname </h1>";
}
}
?>

<br />
<table id="menutable"align="center">
    <tr><td> <a href="updatedetails.php">Edit Personal Details </a></td> <td>|</td>     
     <td><a href="addreport.php" id="one"> Add a New Report</a></td></tr>
    </table> 
<br />

   
   <?php
   include("db/config.php");

   $user="$_SESSION[var]";
   $report="SELECT * FROM reports where username='$user' ";
$run=mysqli_query($conn,$report);
if($run){
echo "<h2 style='color:#003366; font-family:Arial, Helvetica, sans-serif;' align='left'>Your Reports</h2><br>
<br>
<table id='report' align='center'><tr><th>Car Name</th><th>Number </th> <th>Date </th> <th colspan='3'>Actions</th></tr>";
while($row_wise_data=mysqli_fetch_array($run))
{	
$sno=$row_wise_data[0];
$carname=$row_wise_data[5];
	$vehi_no=$row_wise_data[4];
	$date=$row_wise_data[3];
echo "<tr><td>$carname</td><td>$vehi_no</td><td>
    $date</td><td><a href='report.php?sno=$sno'>View</a></td>
	<td><a href='editreport.php?sno=$sno'>Edit</a></td>
	<td><a href='#' onclick='return confirmDelete();'>Delete</a></td></tr>
	
	";
	echo"<script>
    function confirmDelete()
    {
      var x = confirm('Are you sure you want to delete?');
      if (x)
           window.open('delreport.php?sno=$sno');
      else
       window.open('majorhome.php','_self');
    }
</script> ";
}

echo "</table>";}
else
{echo "No Reports Found.";
	}
   ?>
    
 </div>


</body>
</html>