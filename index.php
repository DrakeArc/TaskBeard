<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Task Beard</title>
    <link href="./assets/index.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<?php include('components/back.html') ?>
<div class="wrap">
    <div class="main">
        <div class="container mt-4">
            <?php
            if(!isset($_COOKIE['user_log'])){
                setcookie('user_log', ' ', time() + 3600, '/');
                setcookie('user_pass', ' ', time() + 3600, '/');
            }
              error_reporting(E_USER_WARNING);
            if($_COOKIE['user_log'] == ' '){
                include ('components/form.html');
            }
            if ($_COOKIE['user_log'] != ' '){
                include "php/conn.php";
                $conn = OpenCon();
                $login = $_COOKIE['user_log'];
                $pass = $_COOKIE['user_pass'];
                $res = $conn->query("select * from `users` where `login` = '$login' AND `pass` = '$pass'");
                $user = $res->fetch_assoc();
                if(count($user)){
                    header('Location: components/authed.php');
                };
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>