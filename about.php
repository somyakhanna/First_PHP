<?php
session_start();

if(!$_SESSION['var'])
{
	header("location:index.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/mystyle.css" type="text/css" rel="stylesheet"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About us</title>
</head>

<body>
<?php include("includes/heade.php");?>
	<?php include("includes/menul.php");?>
	  <div id="content">
    <div id="top_con">
    <img id="logo" src="pics/logo.jpg" width="200px" height="200px" onClick="about.php">
    </div>
    
    <div id="bot_con">
    
    <div id="homed"><img id="homedish" src="pics/dish.jpg" width="200px" height="200px">
    <br>
    <img id="hd2" src="pics/hd2.jpg" width="200px" height="200px">
 </div>
 
    <div id="what">
    <p >
    <h1>About us</h1>
    Hello friends and welcome to our community!

<h2>Our Story</h2>
 <p>We recognized the hunger in our food blogging community to learn more about making the most of our blogs for ourselves and for our families. To fulfill and feed our desire to learn and share, we started a little website to provide some helpful info for food bloggers.  Within 1 hour of launching, the explosion of excitement and member signups crashed the website.  From that moment on, we knew there was a special spirit and enthusiasm in our community that went way beyond our expectations. We felt empowered and proud to be a part of this wonderful community and knew we needed to do more.</p>
 <p>But the root and heart of why Food Tree continues to grow is a result of the outstanding members within our community, who we consider a part of our family. Food Blog Forum represents wonderful bloggers from around the world, all fostered through the love of food.

    </p>
   
    
    <ul type="circle">
    <li>We believe you can never stop learning.</li>
    <li>We believe everyone has something share. </li>
    <li>We believe food and drink fosters community, love and unites us all.</li>
       </ul>
    <p>Cheers<br />Somya Khanna
    </div>
    </div>
    </div>
	 <?php include("includes/footer.php");?>
      

</body>
</html>
</body>
</html>