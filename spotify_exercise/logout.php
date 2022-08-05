<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!$_COOKIE['email']) {
        require_once 'nav.html';
    } else {
        require_once 'nav_logedIn.html';
    } ?>
    <form method="post">
        <p>Are you sure you want to log out</p>
        <input type="submit" value="log out" name="log_out">
        <input type="submit" value="no! I want to stay " name="stay">
    </form>
    <?php

    if (isset($_POST['stay'])) {
        header('location: http://localhost:8888/Simon/spotify_exercise/loged_in.php');
        exit;
    }
    if (isset($_POST['log_out'])) {
        setcookie('email', $email, time() - 30);
        header('location: http://localhost:8888/Simon/spotify_exercise/login.php');
        exit;
    }
    ?>
</body>

</html>