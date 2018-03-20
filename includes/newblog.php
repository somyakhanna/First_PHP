 <div id="gcontent">
      
<form method="post" >
<fieldset id="reg">
<legend>Blog</legend>
<table align="center">
<tr>
<th>Title:</th> <td><input type="text" name="title" required></td>
</tr>
<tr>
<th>
Description: </th><td><textarea name="con" cols="80" rows="50" required placeholder="Write your content here..." ></textarea></td>
</tr>
<tr><th colspan="3">
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
	$content=$_POST['con'];
	$uname=$_SESSION['var'];
		$ins="insert into dailyblogs(username,btitle,content) values('$uname','$title','$content')";
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