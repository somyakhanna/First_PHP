<?php
include("db/config.php");
$q="select status from reports limit 1";
$run=mysqli_query($conn,$q);
while($r=mysqli_fetch_array($run))
{$status=$r[0];
echo $status;
	
	if($status='Found'){
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "1";
fwrite($myfile, $txt);
fclose($myfile);
	}
}
?>