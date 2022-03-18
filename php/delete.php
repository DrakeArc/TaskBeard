<?php
    $del = $_POST['delete'];
    include "conn.php";
    $conn = OpenCon();
    $req = $conn->query("DELETE FROM `posts` WHERE `id` = '$del'");
    header("Location: /");