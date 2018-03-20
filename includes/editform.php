 <div id="gcontent">
  <?php
include("db/config.php");
 $fetch_data="select * from recipes where title='$_GET[rec]' ";
 
 $run=mysqli_query($conn,$fetch_data);
 
 while($row_wise_data=mysqli_fetch_array($run))
 {
	 $id=$row_wise_data[0];
	 $title=$row_wise_data[1];
	 $desc=$row_wise_data[2];
	 $ing=$row_wise_data[4];
	 $iname=$row_wise_data[5];
	 $steps=$row_wise_data[6];
	 $type=$row_wise_data[7];
	 $serve=$row_wise_data[8];
	 $time=$row_wise_data[9];
 }

?>    
<form method="post" enctype="multipart/form-data">
<fieldset id="reg">
<legend>Update Recipe</legend>
<table align="center">

<tr>
<th>Title:</th> <td><input type="text" name="title" required value="<?php echo $title?>"></td>
</tr>
<tr>
<th>
Description: </th><td><textarea name="desc" cols="50" rows="5" required > <?php echo $desc;?></textarea></td>
</tr>
<tr>
<th>Recipe Servings:</th> <td><input type="text" name="serve" required value="<?php echo $serve?>"></td>
</tr>
<tr>
<th>Cooking Time:</th> <td><input type="text" name="time" required value="<?php echo $time?>"></td>
</tr>
<tr>
<th>
Ingredients </th>
<td><textarea name="ing" cols="50" rows="5" required  ><?php echo $ing?></textarea></td></tr>
<tr>
<th>Steps: </th>
<td><textarea name="steps" cols="100" rows="50" required ><?php echo $steps?></textarea></td>
</tr>
<tr>
<th>
Course:</th><td>
<select name=menulist>
<option value="<?php echo $type?>"><?php echo $type?></option>
<option value="Drinks">Drinks</option>
<option value="Starters">Starters</option>
<option value="Main Course">Main Course</option>
<option value="Dessert">Dessert</option>
</select>
</td>
</tr>
<tr>
<th>
Upload image:</th><td><input type="file" name="image"  /><span><?php echo $iname;?></span></td></tr>
<br />
<tr>
<th colspan="5" rowspan="2" >
<input type="submit"  name="sub" value="Update" /></th>
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
	
$name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
if($name!="") {

move_uploaded_file($temp_name,"pics/$name");
}
else
$name=$iname;
$update="update recipes set title='$title', time='$time',ingredients='$ing',steps='$steps',serve='$serve', type='$type',description='$desc',iname='$name' where id='$id'";
$run=mysqli_query($conn,$update);
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