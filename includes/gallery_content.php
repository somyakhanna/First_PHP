<center>

<div id="gcontent">
<fieldset id="reg">
<br />
<h1>Gallery</h1>
<br />
<h2>Starters</h2>
<?php
include("db/config.php");
$data="select * from recipes where type='Starters' ORDER BY id DESC limit 4";
$run=mysqli_query($conn,$data);
echo "<table cellpadding='6'><tr>";

while($row_img=mysqli_fetch_array($run))
{
	$name=$row_img[5];
$title=$row_img[1];
echo "<figure><td><a href='recipe.php?rec=$title'><img src='pics/$name' height='200px' width='200px alt='$name' /></a>
  <figcaption>$title</figcaption>
</figure>
</td>
";
}
echo "</tr></table>";

?>
<h2>Desserts</h2>
<?php
$data="select * from recipes where type='Dessert' ORDER BY id DESC limit 4 ";
$run=mysqli_query($conn,$data);
echo "<table cellpadding='6'><tr>";
while($row_img=mysqli_fetch_array($run))
{
$name=$row_img[5];
$title=$row_img[1];
echo "<figure><td><a href='recipe.php?rec=$title'><img src='pics/$name' height='200px' width='200px alt='$name' /></a>
  <figcaption>$title</figcaption>
</figure>
</td>
";
}
echo "</tr></table>";

?>
<h2>Main Course</h2>
<?php
$data="select * from recipes where type='Main Course' ORDER BY id DESC limit 4 ";
$run=mysqli_query($conn,$data);
echo "<table cellpadding='6'><tr>";
while($row_img=mysqli_fetch_array($run))
{
$name=$row_img[5];
$title=$row_img[1];
echo "<figure><td><a href='recipe.php?rec=$title'><img src='pics/$name' height='200px' width='200px alt='$name' /></a>
  <figcaption>$title</figcaption>
</figure>
</td>
";}
echo "</tr></table>";
?>

<h2>Drinks</h2>

<?php
$data="select * from recipes where type='Drinks' ORDER BY id DESC limit 4 ";
$run=mysqli_query($conn,$data);
echo "<table cellpadding='6'><tr>";
while($row_img=mysqli_fetch_array($run))
{
$name=$row_img[5];
$title=$row_img[1];
echo "<figure><td><a href='recipe.php?rec=$title'><img src='pics/$name' height='200px' width='200px alt='$name' /></a>
  <figcaption>$title</figcaption>
</figure>
</td>
";}
echo "</tr></table>";
?>

</div>
</fieldset>
</center>