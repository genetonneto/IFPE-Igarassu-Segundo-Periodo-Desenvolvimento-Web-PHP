<?php
    session_start();

    if (!isset($_SESSION['auth']) or $_SESSION['auth'] !== true) {
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome</h1>    
    <p>You are acessing a restricted area</p>
    <p>
        <a href="logout.php">Logout</a>
    </p>
</body>

</html>