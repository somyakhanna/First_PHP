<div id="gcontent">
<br />
<br />

<?php
include("db/config.php");
echo "<h1>$_GET[type]</h1>";
$data="select * from recipes where type='$_GET[type]'";
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
?>
</div>