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
            <h3>
                Другие пользователи сервиса<br>
            </h3>
            <?php
            include "../php/conn.php";
            $conn = OpenCon();
            $req = $conn->query("SELECT * FROM `users`");
            foreach ($req as $item) {
                echo "<p>".$item['name']."</p>";
            }
            ?>
            <a href="authed.php"><button class="exit">Назад к списку</button></a>
        </div>
    </div>
</div>
<script>
    let wrap = document.querySelector('.wrap');
    setTimeout(() => {
        wrap.style.opacity = 1;
    }, 4000)
</script>
</body>
</html>