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
<title>Alumnac</title>
</head>

<body>
<h1>Complete your Profile</h1><h5>Quick Four Steps to complete your Profile</h5>
<br />
<p>
<h2>Contact Details</h2>
Help your alumni reach you!
<br />
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<th>
Mobile No*</th> <td><input type="text" name="phone" onfocus="func(this)"   required />
<p id="a"></p>
<script>
function func(x)
{
	document.getElementById('a').innerHTML ="Your contact details are visible to your batchmates by Default.You can change your privacy settings to either Only Admin,Batchmates or All Registered users after your registration is approved in 'Edit Profile' Section";}
</script>
</td>
</tr>
<tr>
<th>
Home Phone No : </th><td><input type="text" name="homephn" 
></td>
</tr>
<tr>
<th>
Website/Portfolio/Blog: </th>
<td><input type="url" name="url" placeholder="www.yourwebsite.com"
></td>
</tr>
<tr><td><h2>Present Address</h2>
Address:</th> <td><input type="text" name="house" placeholder="Street & Locality"
></td>
</tr>
<tr>
<th>
City: </th><td><input type="text" name="city" placeholder="City"
></td>
</tr>
<tr>
<th>
State: </th>
<td><input type="text" name="State" placeholder="State"
></td>
</tr>
<tr>
<th>
Country: </th>
<td><input type="text" name="country" value="India" placeholder="Country"
></td>
</tr>
<tr>
<td><p style="text-align:left;"><a href="complete.php"> -Back</a></td>
<td style="text-align:center"><input type="submit" name="sub" value="Save and Continue" /></td>
<td style="text-align:right"><a href="comp3.php">Go to Next Step-></a></td>
</tr>
</body>
</html>