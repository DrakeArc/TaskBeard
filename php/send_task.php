<?php
include "conn.php";
$conn = OpenCon();
$title = $_POST['title'];
$content = $_POST['content'];
$time = date('Y-m-d H:i:s');
if(isset($title, $content)){
    $req = $conn->query("INSERT INTO `posts` (`id`, `title`, `content`, `date`) VALUES (NULL, '$title', '$content', '$time')");
}
header('Location: /');