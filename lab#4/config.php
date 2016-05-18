<?php
$host = "localhost";
$db_name ="new_bd";
$login = "VendeTTa";
$pawd ="12345";
$connect = mysql_connect("$host","$login","$pawd");
if(!$connect)
{
	exit(mysql_error());
}
mysql_select_db("$db_name",$connect);
mysql_query("SET NAMES 'utf-8'");
?>