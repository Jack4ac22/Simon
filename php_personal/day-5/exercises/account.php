<?php
session_start();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

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
    <?php
    if (!empty($_SESSION['accountEmail'])) {
        if (!empty($_SESSION['accountPassword'])) {
            echo 'welcome to your account';
        } else {
            header("Location: http://localhost:8888/Simon/php_personal/day-5/exercises/logIn.php");
            exit();
        };
    } else {
        header("Location: http://localhost:8888/Simon/php_personal/day-5/exercises/logIn.php");
        exit();
    };

    ?>
    <form action="" method="post">
        <button type="submit" value="Reset" name="reset">log Out</button>
        <?php
        if (isset($_POST['reset'])) {
            unset($_SESSION['accountEmail']);
            unset($_SESSION['accountPassword']);
            header("Location: http://localhost:8888/Simon/php_personal/day-5/exercises/logIn.php");
            exit();
        }
        ?>
    </form>
</body>

</html>