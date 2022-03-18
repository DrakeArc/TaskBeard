<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href="../assets/index.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
<?php include ("back.html")?>
<div style="position:absolute; top:0">
    <main>
        <div class="container mt-4">
            <h1 style="font-size: 2em">Регистрация</h1>
            <form method="post" action="../php/check.php">
                <input
                        type="text"
                        class="form-control"
                        id="login"
                        name="login"
                        placeholder="Логин"><br>
                <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="Ник"><br>
                <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password"
                        placeholder="Пароль"><br>
                <a href="../index.php"><button class="btn btn-success" type="button">Назад к авторизации</button></a>
                <button type="submit" class="btn btn-success" name="sign_up">Регистрация</button>
            </form>
        </div>
    </main>
</div>
</body>
</html>
