<?php
    //Стартуем сессии
 session_start();
 header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
    <meta name="keywords" content="Ключевые слова для поисковиков">
    <meta name="description" content="Описание сайта">
</head>
<body>
    <?php
        // Проверяем, пусты ли переменные логина и id пользователя
        if (empty($_SESSION['login']) or empty($_SESSION['id']))
        {
    ?>
    <!--Если пусты, то выводим форму входа.--> 
    <div>
        <form action="check.php" method="post">
            <label>логин:</label><br/>
            <input name="login" type="text" size="15" maxlength="15"><br/>
            <label>пароль:</label><br/>
            <input name="password" type="password" size="15" maxlength="15"><br/><br/>
            <input type="submit" value="войти"><br/><br/>
        </form>
        <h3>Здравствуйте! Регистрация <a href="register.php">здесь</a></h3>
    </div>
    <?php
        }
        else  //Иначе. 
        {
            $login=$_SESSION['login'];

            //Подключаемся к базе данных.
            $dbcon = mysql_connect("localhost", "user", "password"); 
            mysql_select_db("users", $dbcon);
            if (!$dbcon)
            {
                echo "<p>Произошла ошибка при подсоединении к MySQL!</p>".mysql_error(); exit();
            } else {
                if (!mysql_select_db("users", $dbcon))
                {
                echo("<p>Выбранной базы данных не существует!</p>");
                }
            }
            //Формирование оператора SQL SELECT 
            $sqlCart = mysql_query("SELECT login FROM users WHERE login = '$login'", $dbcon);
            //Цикл по множеству записей и вывод необходимых записей 
            while($row = mysql_fetch_array($sqlCart)) 
            {
                //Присваивание записей 
                $name = $row["name"];
            }
            mysql_close($dbcon);
            // Если не пусты, то мы выводим ссылку
            header('Location: http://127.0.0.1/sitemap.php');

        }
    ?> 
</body>
</html>
