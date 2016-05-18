
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Пример «21-12-2010» v2</title>
<link rel="stylesheet" type="text/css" href="http://likbezz.ru/_theme/_st/_ext/example.css" media="screen" />
<style type="text/css">
/* StartStyle */
#exContent{text-align:left;padding:15px 0 0;}
.win{text-align:left;}
.getCont{padding:5px 7px;}
p.li{color:#00C;cursor:pointer;}
p.li:hover{color:#000;text-decoration:underline;}
/* EndStyle */
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
<script type="text/javascript">
$(document).ready(function(){
$('p.li').click(function(){
var li = $(this).attr("id"),url='./content/'+li+'.html';
$('div.win').toggleClass('opened').toggleClass('closed').next();
$('div.win').load(url).slideToggle();
if($('div.win').hasClass('opened')){
	$(this).html('+');
}
else{
	$(this).html('-');
}
});
});
</script>
</head>
<body>
<div id="exContent" class="example">
<div class="subbox">
	 <div>
	  <p class="li" id="a">Первый подкаталог</p>
	  <p class="li" id="b">Второй подкаталог</p>
	  <p class="li" id="c"Третий подколотый</p>
 	 </div>
</div>
	 <div class="win closed"></div>
<br class="clear" />
</div>
<p style="float:right;text-align:right;font-size:11px;margin:0 10px;">Всё написанное выше - моё личное мнение и за абсолютную истину восприниматься не должно.<br />Есть вопросы лично ко мне - пиши <a title="Мой форум ヅ &sect; Уголок аццкого кодера" href="http://likbezz.ucoz.ru/forum/8">сюда</a></p>
</body>
</html>
