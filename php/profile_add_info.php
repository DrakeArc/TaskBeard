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
    $res = $conn->query("INSERT INTO `user_info` (`login`, `name`, `surname`, `city`, `telephone`, `gender`) VALUES ('$login', '$name', '$surname', '$city', '$telephone_number', '$gender')");
    header('Location: /');