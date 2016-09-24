<?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['name'])) { $password=$_POST['name']; if ($name =='') { unset($name);} }
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
	exit ("<body><div align='center'><br/><br/><br/><h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля!<br>Логин - " .$login. "<br>Имя - " .$name. "<br><a href='register.php'><b>Назад</b></a> к регистрации</h3></div></body>");
}

	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$name = stripcslashes($name);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);

	$login = trim($login);
	$password = trim($password);

	$db_con = mysql_connect("localhost", "root", "hHrKip78");
	mysql_select_db("users", $db_con) or die("Ошибка выбора БД ".mysql_errno());
	if (!$db_con)
	{
        echo "<p>Произошла ошибка при подсоединении к MySQL!</p>".mysql_error(); exit();
    } else {
    if (!mysql_select_db("users", $db_con))
        {
            echo("<p>Выбранной базы данных не существует!</p>");
        }
	}
	$result = mysql_query("SELECT * FROM users WHERE login='$login'", $dbcon);
    $myrow = mysql_fetch_array($result);
	if (!$myrow["login"] == $login)
	{
	    //если пользователя с введенным логином не существует
	    exit ("<body><div align='center'><br/><br/><br/>
		<h3>Извините, пользователь уже существует." . "<a href='index.php'><b>Вход</b></a></h3></div></body>");
	}
?>