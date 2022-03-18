<div>
    <div>
        <nav class="container">
            <div class="row">
                <div class="col-md">
                    <a href="profile.php"><button class="profile exit">Личные кабинет</button></a>
                </div>
                <div class="col-md">
                    <a href="users.php"><button class="users exit">Другие пользователи</button></a>
                </div>
                <div class="col-md">
                    <a href="../php/exit.php"><button class="exit">Выйти</button></a>
                </div>

            </div>
        </nav>
    </div>
    <div class="dashboard">
        <div class="page">
            <div class="new-post">
                <form method="post" action="../php/send_task.php">
                    <div class="form-group">
                        <label>
                            Заголовок
                            <input type="text" name="title">
                        </label>
                        <label>
                            Содержание
                            <input type="text" name="content">
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit">
                    </div>
                </form>
            </div>
            <div class="posts">
                <?php
                $connect = OpenCon();
                $req = $connect->query("Select * from `posts` order by `date` desc");
                foreach ($req as $elem) {
                    $id = $elem['id'];
                    $title = $elem['title'];
                    $content = $elem['content'];
                    echo "
                    <div class='post'>
                        <div>
                            <h2>$title</h2>
                            <p>$content</p>
                            <div class='container'>
                            <form method='post' action='../php/delete.php'>
                                Удалить: 
                                <input id='$id' type='submit' name='delete' value='$id'>
                            </form>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </div>
</div>
