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
                Ваши данные<br>
            </h3>
            <?php
            include "../php/conn.php";
            $conn = OpenCon();
            $login = $_COOKIE['user_log'];
            $req = $conn->query("SELECT `name`,`surname`,`city`,`telephone`,`gender` FROM `user_info` where `login` = '$login'");
            $res = mysqli_fetch_assoc($req);
            $name = $res['name'];
            $surname = $res['surname'];
            $city = $res['city'];
            $tel = $res['telephone'];
            $gender = $res['gender'];
            echo "
                <div id='profile'>
                    <p>Имя: <span class='data'>$name</span> </p>
                    <p>Фамилия <span class='data'>$surname</span> </p>
                    <p>Город: <span class='data'>$city</span> </p>
                    <p>Телефон: <span class='data'>$tel</span> </p>
                    <p>Пол: <span class='data'>$gender</span> </p>
                </div>
            ";
            ?>
            <button id="edit">Изменить</button>
            <div id="root"></div>
            <a href="authed.php"><button class="exit">Назад к списку</button></a>
        </div>
    </div>
</div>
<script>
    let wrap = document.querySelector('.wrap');
    setTimeout(() => {
        wrap.style.opacity = 1;
    }, 4000);
    const edit = document.getElementById('edit');
    edit.addEventListener('click', () => {
        const root = document.getElementById('root');
        const data = document.querySelectorAll('.data');
        console.log(data);
        root.innerHTML = `
            <form method='post' action='../php/profile_edit_info.php'>
                <div class='form-group'>
                    <p>Имя</p>
                    <label>
                        <input type='text' name='name' value="${data[0].textContent}">
                    </label>
                </div>
                <div class='form-group'>
                    <p>Фамилия</p>
                    <label>
                        <input type='text' name='surname' value="${data[1].textContent}">
                    </label>
                </div>
                <div class='form-group'>
                    <p>Город проживания</p>
                    <label>
                        <input type='text' name='city' value="${data[2].textContent}">
                    </label>
                </div>
                <div class='form-group'>
                    <p>Телефон</p>
                    <label>
                        <input type='tel' name='telephone_number' maxlength='12' value="${data[3].textContent}">
                    </label>
                </div>
                <div class='form-group'>
                    <p>Пол</p>
                    ${data[4].textContent}
                </div>
                <div class='form-group'>
                    <input type='submit' name='send' value='Сохранить'>
                </div>
            </form>
        `;

        /*
        *
        * <form method='post' action='../php/profile_add_info.php'>
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
                </form>*/
    })
</script>
</body>
</html>