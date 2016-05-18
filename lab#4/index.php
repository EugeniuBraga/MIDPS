<?php
session_start();
include_once 'config.php';
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
if(isset($_POST['button']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
	$row=mysql_fetch_array($res);
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Hack.COM</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
 </head>
<body background="<?echo '/background_images/bg'.(rand(0,2)).'.jpg'?>">
  <div id="header">
	<div id="left">
   <label><a href="/" style='text-decoration: none;'><font color="9fa8b0" face="mv boli" style="font-size:40px;position:relative;top:0px">HACK.</font><font color="white" style="font-size:40px;position:relative;top:-10px">COM</font></a></label>
    </div>
	<div id="right">
    	<div id="sign">
        	<a href="register.php">Register</a>
        </div>
    </div>
	<table style="position:relative;left:30%;">
	<form  method="post">
     <td><a style="color:#45688E; font: normal small-caps 20px/20px fantasy;">Email:</br><input type="text" name="email" placeholder="Your Email" required/></a></td>
     <td><a style="color:#45688E; font: normal small-caps 20px/20px fantasy;">Password:</br><input type="password" name="pass"placeholder="Your Password" required/></a></td> 
	 <td><a style="position: absolute;top: 22px;"> <button type="submit" class="myButton" name="button">Login</button></a></td>
   </form>
  </table> 
</div>
 </body>
</html>