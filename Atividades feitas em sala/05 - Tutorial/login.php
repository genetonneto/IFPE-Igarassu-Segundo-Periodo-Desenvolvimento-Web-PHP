<?php
    session_start();
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
    <form action="auth.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <button>Login</button>
    </form>    
</body>

</html>