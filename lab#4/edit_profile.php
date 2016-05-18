<?php
header('Content-Type:utf-8');
session_start();
include_once 'config.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>hack.COM</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <script src="/js/register_form_ajax.js"></script>
 </head>
 <body background="<?echo '/background_images/bg'.(rand(0,2)).'.jpg'?>">
  <div id="header">
  <!--<div class="logo"><img src="/images/logo.png" width="100px" height="100px"></div>-->
	<div id="left">
      <label><a href="/" style='text-decoration: none;margin-bottom:-10px;' title='Home'><font color="9fa8b0" face="mv boli" style="font-size:40px;position:relative;top:0px">HACK.</font><font color="white" style="font-size:40px;position:relative;top:-10px">COM</font></a></label>
	</div>
    <div id="right">
    	<div id="sign">
		  <!--<audio src="audio/v._a._motsart_-_rekviem_po_mechte.mp3" controls autoplay="autoplay"style="pisition:absolute;margin-left:20px;"> <p>Если вы видите это сообщение ,значит ваш браузер не поддерживает элемент audio.</p> </audio>-->
			  <img class="header_avatar"  src="<?php echo $userRow["avatar"];?>" title="<?php echo $userRow['user_name'];?>">
		      hi' <?php echo $userRow['user_name']; if($userRow['user_rang']=='admin'){?>
			  <a style="color:red">(Админ)</a><?}?>
			  &nbsp;<a href="logout.php?logout">Sign Out</a>
		    <ul>
				<li><a href="#">text1</a><li>
				<li><a href="#">text2</a><li>
				<li><a href="#">text3</a><li>
				<li><a href="logout.php?logout" style="color:#00a2d1">Sign Out</a><li>
			</ul>
		</div>
       </div>
	 </div>
	 <div id="content">
	 <?php
echo "<td>"?><div id="avatar_profile"><center><img src="<?php echo $userRow["avatar"];?>"  height="200" width="100%" ></center></div><?php echo "</td>";
echo "<div class='name'><h1>".$userRow['user_name']."</h1><div class='edit'></div></div>";
?>
	 </div>
	 
 </body>
</html>