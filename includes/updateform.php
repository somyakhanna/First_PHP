<div id="contenty">
<br />
<?php
include("db/config.php");
 $fetch_data="select * from user1 where username='$_SESSION[var]' ";
 
 $run=mysqli_query($conn,$fetch_data);
 
 while($row_wise_data=mysqli_fetch_array($run))
 {
	 $uname=$row_wise_data[0];
	 $pass=$row_wise_data[4];
	 $fname=$row_wise_data[1];
	 $lname=$row_wise_data[2];
	 $email=$row_wise_data[3];
	 $gen=$row_wise_data[5];
	 $phone=$row_wise_data[6];
	 $aadhar=$row_wise_data[7];
	 $dob=$row_wise_data[9];
	 
 }

?>
<form method="post" enctype="multipart/form-data">

<fieldset id="regy">
<legend><h1 style="font-family:Arial, Helvetica, sans-serif; color:#003366;">Update Details</h1></legend>
<table align="center" id="ut">
<tr>
<th>Enter your User Name:</th> <td><input type="text" name="uname" disabled value="<?php echo $uname?>"
></td>
</tr>
<tr>
<th>
Enter your First Name : </th><td><input type="text" name="fname" required value="<?php echo $fname?>"
></td>
</tr>
<tr>
<th>
Enter your Last Name: </th>
<td><input type="text" name="lname" required value="<?php echo $lname?>"
></td>
</tr>
<tr>
<th>Enter your Email id: </th>
<td><input type="text" name="email" required value="<?php echo $email?>"
></td>
</tr>
<tr>
<th>
Enter your Password: </th><td><input type="password" name="pass" required value="<?php echo $pass?>"/>
</td>
</tr>
<tr>
<th>
Select Gender: </th><td><input type="radio" name="g" value="male" />Male
<input type="radio" name="g" value="female"  />Female</td>

</tr>
<tr><th>
Date of Birth:</th>
<td >
<input type="date" name="dob" value="<?php echo $dob?>"/></td>

</tr>
</tr>
<tr>
<th>Enter your Phone number: </th>
<td><input type="text" name="phone" value="<?php echo $phone?>"/></td>
</tr>
<tr>
<th>Enter your Aadhar number: </th>
<td><input type="text" name="aadhar" value="<?php echo $aadhar?>"/></td>
</tr>
<br />
<tr>
<th colspan="5" rowspan="2" >
<input type="submit" id="regbtn" name="sub" value="Update" /></th>
</tr>
</table>
</fieldset >
</form>
</form>
</div>

<?php
include("db/config.php");
if(isset($_POST['sub']))
{
 $uname=$_POST['uname'];
 $_SESSION['var']=$uname; 
  $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $gen=$_POST['g'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$aadhar=$_POST['aadhar'];
 $update="update users set fname='$fname', lname='$lname',pass='$pass',dob='$dob',gender='$gen', email='$email',phone='$phone',aadhar='$aadhar' where username='$_SESSION[var]'";

if((mysqli_query($conn,$update)))
{
	echo "<script>alert('Details Updated')</script>";
	echo("<script>location.href = 'homepage.php';</script>");
}

else
{
	 echo "<h1 align='center' style='color:red'> Updation Unsuccessful,Try again</h1>";
}
}
?>

