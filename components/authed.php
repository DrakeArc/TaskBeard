<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Task Beard</title>
    <link href="../assets/index.css" rel="stylesheet">
    <link href="../assets/authed.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
</head>
<body>
<?php include('back.html') ?>
<div class="wrap">
    <div class="main">
        <div class="container mt-4">
            <script>
                let wrap = document.querySelector('.wrap');
                setTimeout(() => {
                    wrap.style.opacity = 1;
                }, 4000)
            </script>
            <div class="form__wrapper">
                <?php
//                ini_set('display_errors', 0);
//                ini_set('display_startup_errors', 0);
//                error_reporting(E_ALL);
                include '../php/conn.php';
                $connect = OpenCon();
                $login = $_COOKIE['user_log'];
                $req = $connect->query("SELECT * FROM `user_info` WHERE `login` = '$login'");
                $res = mysqli_fetch_assoc($req);
                if ($req)
                if ($res != null) {
                    include "task_board.php";
                } else {
                    echo "
                    Заполните дополнительные сведения
                <form method='post' action='../php/profile_add_info.php'>
                    <div class='form-group'>
                        <p>Имя</p>
                        <label>
                            <input type='text' name='name'>
                        </label>
                    </div>
                    <div class='form-group'>
                        <p>Фамилия</p>
                        <label>
                            <input type='text' name='surname'>
                        </label>
                    </div>
                    <div class='form-group'>
                        <p>Город проживания</p>
                        <label>
                            <input type='text' name='city'>
                        </label>
                    </div>
                    <div class='form-group'>
                        <p>Телефон</p>
                        <label>
                            <input type='tel' name='telephone_number' maxlength='12'>
                        </label>
                    </div>
                    <div class='form-group'>
                        <p>Пол</p>
                        <label class='radio__label'>
                            <input type='radio' name='gender' value='M'>
                            М<span class='radio'></span>
                        </label>
                        <label class='radio__label'>
                            <input type='radio' name='gender' value='F'>
                            Ж<span class='radio'></span>
                        </label>
                    </div>
                    <div class='form-group'>
                        <input type='submit' name='send' value='Сохранить'>
                    </div>
                </form>
                <a href='../php/exit.php'><button class='exit'>Выйти</button></a>
                    ";
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>