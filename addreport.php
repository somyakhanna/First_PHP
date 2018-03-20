<?php session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Theft Report</title>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="favicon (1).ico">
<style>
#formtable td{
	
	padding:6px;}
    </style>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body >
<?php include("includes/top.php");?>
<div style="background-color:#CCC; padding:0% 1% 0% 1%;"  >
<h3 style="padding:0.5%;" align="left" >
<font color="#003366" size="+1">VEHICLE THEFT DETECTION REPORT FORM</font></h3>
<div style="background-color:#FFF;">
<div style="background-color:#CCC ;"  >
<h4 style="padding:5px;" align="left" >
<font color="#003366" size="+1">  Vehicle Details</font></h4></div>
<div>
<form method="post" enctype="multipart/form-data">
<table id="formtable"><tr><td>Vehicle Name & Model  </td><td><input type="text" name="vname" required="required"/></td></tr>
<tr><td>Vehicle Number  </td><td><input type="text" name="vnum" required="required"/></td></tr>
<tr><td>Vehicle RFID   </td><td><input type="text" name="rf" required="required"/></td></tr>
<tr><td>Registration Number  </td><td><input type="text" name="rno" required="required"/></td></tr>
<tr><td>Color  </td><td><input type="text" name="color" /></td></tr>
</table>

</div>
<div style="background-color:#CCC ;"  ><h4 style="padding:5px;" align="left" ><font color="#003366" size="+1">     Theft Details</font></h4></div>
<div>

<table id="formtable"><tr><td>Date of Theft </td><td><input type="date" name="tdate" required="required"/></td></tr>
<tr><td>Time of Theft </td><td><input type="time" name="time" required="required"/></td></tr>
<tr><td>Exact Location of Loss  </td><td><input type="text" name="location" required="required"/></td></tr>
</table>


</div>
<div style="background-color:#CCC ;"  ><h4 style="padding:5px;" align="left" ><font color="#003366" size="+1">     Declaration</font></h4></div>
<div><font color="#30415D"><p style="padding:6px";>
I/We declare that to the best of my/our knowledge and belief these particulars are complete and correct.
<br>I/We<br />
(a)  agree to give any further information that may be required<br>
(b)  understand you require this personal information, which will be retained by you can rescue my vehicle<br />
(c)  authorise the disclosure of this personal information regarding this report to other parties<br />
(d)   authorise you to place details of this claim on the database where it will be retained and
 be available to other concerned authorities to inspect<br />
(e) understand that I am/we are entitled to have certain rights of access to and correction of the personal information held by you.<br /></p></font>
</div>
<div style="background-color:#CCC ;"  ><h4 style="padding:5px;" align="left" ><font color="#003366" size="+1">     Upload Signature</font></h4></div>
<div>
<table><tr><td rowspan="2"><img src="sign.png" style="width:50px;" id="dp" /></td><td colspan="3" align="right"><input type="file" name="image" onChange="readURL(this);" /></td>

</tr></table>
<script>function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#dp')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }</script>
</div>
<div style="background-color:#CCC ;"  ><p align="center" style="padding:7px;"><input type="submit" id="save" name="sub" value="Submit" align="middle"/></p></div></form>
</div>
</div>


<?php
include("db/config.php");
if(isset($_POST['sub']))
{
$vehino=$_POST['vnum'];
$vname=$_POST['vname'];
$rfid=$_POST['rf'];
$color=$_POST['color'];
$regno=$_POST['rno'];
$tdate=$_POST['tdate'];
$ttime=$_POST['time'];
$loc=$_POST['location'];
 $uname="$_SESSION[var]";
   $name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];

move_uploaded_file($temp_name,"pics/$name");
 
  $ins="insert into reports(username,vehino,carname,rfid,regno,color,theftdate,thefttime,location,sign) values ('$uname','$vehino','$vname','$rfid','$regno','$color','$tdate','$ttime','$loc','$name')";
if(mysqli_query($conn,$ins)){
		echo("<script>location.href = 'majorhome.php';</script>");
}
else{
	echo "Try Again";}
}
?>

</body>
</html>