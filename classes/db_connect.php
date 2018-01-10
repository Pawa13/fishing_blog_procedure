<?php
$host = 'localhost'; // адрес сервера 
$database = 'blog'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '58792'; // пароль
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

?>
