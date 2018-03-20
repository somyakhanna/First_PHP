<?php session_start();
include("includes/topindex.php")
?>
<html>
<body>
<center>
<div id="top">
<fieldset>
    <h1> Login </h1>
    <?php $role='$_GET[role]';
	echo $role;?>
	<form method="post" onClick="page.php">
  
  <table align="center">
          <tr>
          <th><b>Login id</b></th>
          <td><input type="text" name="uname" required/><br></td></tr>
         
        <tr>
          <th><b>Password</b></th>
          <td><input type="password" name="pass" required/></td>
        </tr>
        <tr>
         <th colspan="2" rowspan="2"><input type="submit" value="Login" name="sub"  /></th>
        </tr>
      </table>
  
</form>
   </div>
   </center>
   <?php
   include("db/config.php");
if(isset($_POST['sub']))
{
$name=$_POST['uname'];
$pass=$_POST['pass'];
$_SESSION['var']=$name; 
$data="select * from users where username='$name' AND password='$pass'";
$run=mysqli_query($conn,$data);
if(mysqli_num_rows($run)>0)
	{
	echo("<script>location.href='homepage.php?nm=$name';</script>");
		}
	
	else
	{
		echo "<h2 style='color:red' align='center'> Wrong User ID or Pass.. Plz Check";
	}
}
ob_end_flush();
?>
</body>
</html>
