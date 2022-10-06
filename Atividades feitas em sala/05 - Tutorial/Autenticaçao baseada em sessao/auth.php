<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin123'){
        $_SESSION['auth'] = true;
    } else {
        $_SESSION['auth'] = false;
    }

    header('location: home.php');

?>