<?php
    setcookie('user_log', ' ', time() + 3600, '/');
    setcookie('user_pass', ' ', time() + 3600, '/');
    header("Location: /");