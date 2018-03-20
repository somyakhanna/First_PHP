<div id="content">
<form method="post" enctype="multipart/form-data">
<br />
<br />
<fieldset id="reg">
<legend><h1>Registration form</h1></legend>
<table align="center">
<!--<tr>
<th colspan="5"><h1>Registration form</h1></th>
</tr>-->
<tr>
<th>Enter your User Name:</th> <td><input type="text" name="uname" required
></td>
</tr>
<tr>
<th>
Enter your First Name : </th><td><input type="text" name="fname" required
></td>
</tr>
<tr>
<th>
Enter your Last Name: </th>
<td><input type="text" name="lname" required
></td>
</tr>
<tr>
<th>Enter your Email id: </th>
<td><input type="text" name="email" required
></td>
</tr>
<tr>
<th>
Enter your Password: </th><td><input type="password" name="pass" required />
</td>
</tr>
<tr>
<th>
Select Gender: </th><td><input type="radio" name="g" value="male"/>Male
<input type="radio" name="g" value="female" />Female</td>

</tr>
<tr>
<th>
Select Your City:</th><td>
<select name=slist>
<option value="">------------Select State------------</option>
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
Profile picture:</th><td><input type="file" name="image" /></td></tr>
<br />
<tr>
<th colspan="5" rowspan="2" >
<input type="submit" id="regbtn" name="sub" value="Register" /></th>
</tr>
</table>
</fieldset >
</form>
</div>

<?php
include("db/config.php");
if(isset($_POST['sub']))
{
 $uname=$_POST['uname'];
  $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $gen=$_POST['g'];
 $state=$_POST['slist'];
 $name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];

move_uploaded_file($temp_name,"pics/$name");
 $int=$_POST['interest'];
 $chk="";   
foreach($int as $chk1)   
{   
   $chk .= $chk1.",";   
 }   
  
$ins="insert into users(uname,pass,fname,lname,email,gen,state,interest,profilepic) values('$uname','$pass','$fname','$lname','$email','$gen','$state','$chk','$name')";

if((mysqli_query($conn,$ins)))
{
	echo "<script>alert('Congrats!You can enter the food tree now!')</script>";
	echo("<script>location.href = 'index.php';</script>");
}

else
{
	 echo "<h1 align='center' style='color:red'> Registration Unsuccessful,Try again</h1>";
}
}
?>