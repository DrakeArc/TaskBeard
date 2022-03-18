<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $city = $_POST['city'];
    $telephone_number = $_POST['telephone_number'];
    $gender = $_POST['gender'];
    $login = $_COOKIE['user_log'];
    $pass = $_COOKIE['user_pass'];
    include 'conn.php';
    $conn = OpenCon();
    $res = $conn->query("UPDATE `user_info` SET `name` = '$name', `surname` = '$surname', `city` = '$city', `telephone` = '$telephone_number' WHERE `login` = '$login'");
    header('Location: /');