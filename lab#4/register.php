<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'config.php';
if(isset($_POST['btn-signup']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$cpass = md5(mysql_real_escape_string($_POST['cpass']));
	
	$email = trim($email);
	$uname = trim($uname);
	$upass = trim($upass);
	$cpass = trim($cpass);
	// email exist or not
	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
  if($upass!=$cpass){
	  ?><script>alert('Passwords do not match!');</script><?
                    }
	  else{
	if($count == 0){
		if(mysql_query("INSERT INTO users(user_name,user_pass,user_email,user_rang,avatar,birth_date,reg_date) VALUES('$uname','$upass','$email','user','/avatar/AnonymouseNoAva.png','',NOW())"))
		{
			$res=mysql_query("SELECT user_id FROM users WHERE user_email='$email'");
	        $row=mysql_fetch_array($res);
		    $_SESSION['user'] = $row['user_id'];
			header("Location: home.php");
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}
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
    <label> <a href="/" style='text-decoration: none;'><font color="9fa8b0" face="mv boli" style="font-size:40px;position:relative;top:0px">TEST.</font><font color="white" style="font-size:40px;position:relative;top:-10px">RU</font></a></label>
	</div>
	</div>
 <div id="regForm">
 <table width='70'>
 <tr>
    <form  method="post">
 <td><label>Email:</label></td><td><input type='text' name="email" placeholder="Your Email" required ></br></br></td>
 </tr>
 <tr>
 <td><label>Username:</label></td><td><input type='text' name="uname" placeholder="Username" required ></br></br></td>
 </tr>
 <tr>
 <td><label>Password:</label></td><td><input type='password' name="pass" placeholder="Your Password" required ></br></br></td>
 </tr>
 <tr>
 <td><label>Confirmed Password:</label></td><td><input type='password' name="cpass" placeholder="Your Password" required ></br></br></td>
 </tr>
  </table>
<tr><center><button type='submit' class="myButton" name='btn-signup'>Sign Up</button></br></br></center></tr>
</form>
 </div>
 </body>
</html>