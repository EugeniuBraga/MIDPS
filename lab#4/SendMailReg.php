<? 
mail("sergey.oancha@gmail.com", "My Subject", "Line 1\nLine 2\nLine 3"); 
if (isset($_POST['uname'])) {$name = $_POST['uname'];}
if (isset($_POST['email'])) {$mail = $_POST['email'];}

$name = stripslashes($name);

$subject = "Hack.COM"; 

$name = htmlspecialchars($name);
$mail = stripslashes($mail);
$text_message = stripslashes($text_message);
$text_message = htmlspecialchars($text_message);
$mail =  htmlspecialchars($mail);
$address = "london.london2012@mail.ru"." , ";
$address_user .= "$mail";
$message = "".$text_message."\nС уважением, ".$name."\nМой контактный e-mail: ".$mail."\nНужный размер: ".$size."\nВремя/Дата: ".$time."\nАдресс: ".$addresshome."\nНомер Телефона: ".$Numtel."";

$messagehtml = '
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<style type="text/css">
#Header {
position: absolute; 
right: 5%;
top:200px;
width: 200px;
height: 200px;
}
</style>
</head>
<body>
<div id="Header" style="background:url(AirForceWight.png);background-size: contain;">
    <h2 style="left:100px; position: absolute; color:Black"><center><font color="#ff0000">'.$_POST["name"].'</font>, ваш заказ принят!!!</center></h2>
С уважением, <b> '.$_POST["uname"].'</b><br>
Мой контактный e-mail: <b>  '.$_POST["email"].'</b><br>
<br><br><br><br>
</div>
    </body> 
</html>';

$verify = mail($address,$subject,$message,"Content-type:text/plain; Charset=utf-8\r\n" . "From: robot@timechat.com\r\n");
mail($address_user,$subject,$messagehtml,"Content-type: text/html; charset=utf-8\r\n" . "From: robot@timechat.ru\r\n");

if ($verify == 'true')
{
echo "
<meta http-equiv='content-type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 
 <img align='center' src='nike.png'>
 <div align='center' class='warning_font_big'>Поздравляем!</div>
 <div align='center' class='warning_font' align='left'>Ваше письмо доставлено администратору. Ваш заказ принят!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 
 </td>
 </tr>
 </table>";
}
else 
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>ОШИБКА!!!</div>
 <div align='center' class='warning_font' align='left'>Ваше письмо не доставлено. Повторите отправку немного позже!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 
 </td>
 </tr>
 </table>";
}
?>