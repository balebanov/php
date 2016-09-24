<!DOCTYPE html>
<html>
<head>
	<title>Регистрация пользователя на 127.0.0.1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<h4>Форма регистрации</h4>
	<form action="reg_check.php" method="post">
		<label>имя(e-mail):</label><br/>
		<input name="name" type="text" size="50" maxlength="50"><br/>
		<label>логин:</label><br/>
		<input name="login" type="text" size="15" maxlength="15"><br/>
		<label>пароль:</label><br/>
		<input name="password" type="password" size="15" maxlength="15"><br/><br/>
		<input type="submit" value="войти"><br/><br/>
	</form>
</body>
</html>