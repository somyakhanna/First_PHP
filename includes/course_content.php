<div id="gcontent">
<fieldset id="reg">
<br />
<h1>Menu</h1>
<br />
<h2>Starters</h2>
<?php
include("db/config.php");
$data="select * from recipes where type='Starters' ORDER BY id DESC limit 2";
$run=mysqli_query($conn,$data);
echo "<ol>";

while($row_img=mysqli_fetch_array($run))
{
	$desc=$row_img[2];
$title=$row_img[1];
$uname=$row_img[3];
$img=$row_img[5];
$q="select fname,lname from users where uname='$uname'";
$run2=mysqli_query($conn,$q);
while($row_name=mysqli_fetch_array($run2)){
$fname=$row_name[0];
$lname=$row_name[1];
echo "<li><h3><a href='recipe.php?rec=$title' id='arec'>$title</a></h3></li> <br> 
&nbsp;&nbsp;By $fname $lname <br><br>
    $desc
<br><br>"
;
}
}
echo "</ol>  <a href='courses2.php?type=Starters' id='all'>Click here to see all..</a>";

?>
<h2>Main Course</h2>
<?php
include("db/config.php");
$data="select * from recipes where type='Main Course' ORDER BY id DESC limit 2";
$run=mysqli_query($conn,$data);
echo "<ol>";

while($row_img=mysqli_fetch_array($run))
{
	$desc=$row_img[2];
$title=$row_img[1];
$uname=$row_img[3];
$q="select fname,lname from users where uname='$uname'";
$run2=mysqli_query($conn,$q);
while($row_name=mysqli_fetch_array($run2)){
$fname=$row_name[0];
$lname=$row_name[1];
echo "<li><h3><a href='recipe.php?rec=$title' id='arec' >$title</a></h3></li> <br> 
&nbsp;&nbsp;By $fname $lname <br><br>
    $desc
<br>";}
}
echo "</ol> <br> <a href='courses2.php?type=Main Course' id='all'>Click here to see all..</a>";

?>
<h2>Desserts</h2>
<?php
$data="select * from recipes where type='Dessert' ORDER BY id DESC limit 2";
$run=mysqli_query($conn,$data);
echo "<ol>";

while($row_img=mysqli_fetch_array($run))
{
	$desc=$row_img[2];
$title=$row_img[1];
$uname=$row_img[3];
$q="select fname,lname from users where uname='$uname'";
$run2=mysqli_query($conn,$q);
while($row_name=mysqli_fetch_array($run2)){
$fname=$row_name[0];
$lname=$row_name[1];
echo "<li><h3><a href='recipe.php?rec=$title' id='arec' >$title</a></h3></li> <br> 
&nbsp;&nbsp;By $fname $lname <br><br>
    $desc
<br><br>";}
}
echo "</ol>  <a href='courses2.php?type=Dessert' id='all'>Click here to see all..</a>";

?>

<h2>Drinks</h2>

<?php
$data="select * from recipes where type='Drinks' ORDER BY id DESC limit 2 ";
$run=mysqli_query($conn,$data);
$run=mysqli_query($conn,$data);
echo "<ol>";

while($row_img=mysqli_fetch_array($run))
{
	$desc=$row_img[2];
$title=$row_img[1];
$uname=$row_img[3];
$q="select fname,lname from users where uname='$uname'";
$run2=mysqli_query($conn,$q);
while($row_name=mysqli_fetch_array($run2)){
$fname=$row_name[0];
$lname=$row_name[1];
echo "<li><h3><a href='recipe.php?rec=$title' id='arec'>$title</a></h3></li> <br> 
&nbsp;&nbsp;By $fname $lname <br><br>
    $desc
<br>";}
}
echo "</ol> <br> <a href='courses2.php?type=Drinks' id='all'>Click here to see all..</a>";

?>
</fieldset>
</div>