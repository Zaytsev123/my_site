<html>
<head>
<title>Сайт рецептов</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body TEXT="#e6e6fa">
<div id="header"></div>
<div id="left"> Чтобы оставлять здесь свои рецепты или комментировать чужие, пожалуйста, авторизуйтесь.
<form name="form1" method="post" action="index.php">
<p> Имя: <input type="text" name="sirname"> </p> 
<p> Ваш Email:<input  type="text" name="email"></p>
<p>Сообщение: <textarea name="message"></textarea> </p>
<p> <input type="submit" name="send" value="Отправить"> </p></form>  

<?php 
$db=mysql_connect("localhost", "root",""); 
mysql_select_db("mysite", $db); 
?>


<? 
$name = $_POST["sirname"]; 
$email = $_POST["email"];
$text_message = $_POST["message"];

$sql = "INSERT INTO mymessage(name, email, message) VALUES ('$name', '$email', '$text_message')";
$result=mysql_query($sql) or die("Ошибка в запросе!".mysql_error());

$sql="SELECT name, email, message FROM mymessage";
$result=mysql_query($sql);

while ($line=mysql_fetch_row($result)) {
echo "<b>Имя:</b>".$line[0]."<br>";
echo "<b>Email:</b>".$line[1]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br>";
}

?> 

</div> 
<div id="content">
<br>

<p><h1 align="center">Рады видеть каждого на кулинарном форуме.</h1></p>
<br>
<p><h2 ALIGN="justify" COLOR="#c0c0c0"> Здесь каждый из вас сможет принять участие в обсуждениях рецептов и рациона для вас, ваших родных и близких. Вы легко сможете научиться новому. Нахождение на форуме пойдет на пользу вам, вашей семье, ведь питание это очень важно. Оставляйте отзывы, делитесь советами. Так же мы принимаем предложения, касаемые устройтсва сайта.<br></h2></p>
<a href="second.html"><img  src="Вторая страница сайта" size:100 ALIGN="center" border="0"</a>
</div>
<div id="footer">Вторая страница сайта</div>




</body>

<!-- </html>  -->