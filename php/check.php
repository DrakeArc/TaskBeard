<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 4 || mb_strlen($login) > 18) {
        echo "Недопустимая длина логина";
        echo "<br><a href='../components/reg.php'><button class='btn btn-success'>Назад</button></a>";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 45) {
        echo "Недопустимая длина имени";
        echo "<br><a href='../components/reg.php'><button class='btn btn-success'>Назад</button></a>";
        exit();
    } if (mb_strlen($pass) < 2 || mb_strlen($pass) > 12) {
        echo "Недопустимая длина пароля";
        echo "<br><a href='../components/reg.php'><button class='btn btn-success'>Назад</button></a>";
        exit();
    }

    $pass = md5($pass."fsdgdfdf3452");

include "conn.php";
    $conn = OpenCon();
    $conn->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login','$pass','$name')");

    CloseCon($conn);

    header('Location: /');