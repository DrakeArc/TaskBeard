<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$pass = md5($pass."fsdgdfdf3452");

include "conn.php";
$conn = OpenCon();

$res = $conn->query(
    "Select * from `users` 
            where `login` ='$login' and `pass` = '$pass'");

$users = $res->fetch_assoc();
if (count($users) == 0){
    echo "Пользователь не найден";
    exit();
}

setcookie('user_log', $users['login'], time() + 3600, '/');
setcookie('user_pass', $users['pass'], time() + 3600, '/');

CloseCon($conn);

header('Location: /');