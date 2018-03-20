 <div id="gcontent">
      
<form method="post" enctype="multipart/form-data">

<fieldset id="reg">
<legend>Recipe</legend>
<table align="center">
<!--<tr>
<th colspan="5"><h1>Registration form</h1></th>
</tr>-->
<tr>
<th>Title:</th> <td><input type="text" name="title" required></td>
</tr>
<tr>
<th>
Description: </th><td><textarea name="desc" cols="50" rows="5" required placeholder="Description should be less than 200 characters.." ></textarea></td>
</tr>
<tr>
<th>Recipe Servings:</th> <td><input type="text" name="serve" required></td>
</tr>
<tr>
<th>Cooking Time:</th> <td><input type="text" name="time" required></td>
</tr>
<tr>
<th>
Ingredients </th>
<td><textarea name="ing" cols="50" rows="5" required placeholder="Write down the ingredients here.." ></textarea></td></tr>
<tr>
<th>Steps: </th>
<td><textarea name="steps" cols="100" rows="50" required placeholder="Write the steps for the recipe here..." ></textarea></td>
</tr>
<tr>
<th>
Course:</th><td>
<select name=menulist>
<option value="">------------Select the course------------</option>
<option value="Drinks">Drinks</option>
<option value="Starters">Starters</option>
<option value="Main Course">Main Course</option>
<option value="Dessert">Dessert</option>
</select>
</td>
</tr>
<tr>
<th>
Upload image:</th><td><input type="file" name="image" /></td></tr>
<br />
<tr>
<th colspan="5" rowspan="2" >
<input type="submit"  name="sub" value="Upload" /></th>
</tr>
</table>
</fieldset >
</form>
<?php
include("db/config.php");
if(isset($_POST['sub']))
{
	$title=$_POST['title'];
	$serve=$_POST['serve'];
	$time=$_POST['time'];
	$desc=$_POST['desc'];
	$ing=$_POST['ing'];
	$steps=$_POST['steps'];
	$type=$_POST['menulist'];
	$uname="$_SESSION[var]";

$name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];

move_uploaded_file($temp_name,"pics/$name");
$ins="insert into recipes(title,description,username,ingredients,iname,steps,type,serve,time) values ('$title','$desc','$uname','$ing','$name','$steps','$type','$serve','$time')";
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