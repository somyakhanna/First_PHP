<div id="gcontent">
<br />
<?php
include("db/config.php");
 $fetch_data="select * from users where uname='$_SESSION[var]' ";
 
 $run=mysqli_query($conn,$fetch_data);
 
 while($row_wise_data=mysqli_fetch_array($run))
 {
	 $uname=$row_wise_data[0];
	 $pass=$row_wise_data[1];
	 $fname=$row_wise_data[2];
	 $lname=$row_wise_data[3];
	 $email=$row_wise_data[4];
	 $gen=$row_wise_data[5];
	 $state=$row_wise_data[6];
	 $interest=$row_wise_data[7];
	 $pic=$row_wise_data[8];
	 
 }

?>
<form method="post" enctype="multipart/form-data">
<br />
<fieldset id="reg">
<legend><h1>Update Details</h1></legend>
<table align="center">
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
<tr>
<th>
Select Your City:</th><td>
<select name=slist>
<option value="<?php echo $state?>"><?php echo $state?></option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
</td>
</tr>
<tr>
<th>
Special Interests:
</th><td> <input type="checkbox" name="interest[]" value="starters" />Starters
 <input type="checkbox" name="interest[]" value="drinks" />Drinks
 <input type="checkbox" name="interest[]"value="main" />Main Course	
  <input type="checkbox"name="interest[]" value="dessert"/>Dessert</td>
<br />
</tr>
<tr>
<th>
Profile picture:</th><td><input type="file" name="image" /><span><?php echo $pic;?></span></td></tr>
<br />
<tr>
<th colspan="5" rowspan="2" >
<input type="submit" id="regbtn" name="sub" value="Update" /></th>
</tr>
</table>
</fieldset >
</form>
<br>
<br>
</div>
<?php
if(isset($_POST['sub']))
{
  $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $gen=$_POST['g'];
 $state=$_POST['slist'];
 $name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
if($name!="") {

move_uploaded_file($temp_name,"pics/$name");
}
else
$name=$iname;
 $int=$_POST['interest'];
 $chk="";   
foreach($int as $chk1)   
{   
   $chk .= $chk1.",";   
 }   
  
$update="update users set fname='$fname', lname='$lname',pass='$pass',state='$state',gen='$gen', email='$email',interest='$chk',profilepic='$name' where uname='$_SESSION[var]'";

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

