<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging In</title>
</head>
<?php
if (isset($_POST['submitBtn'])) {
    $accountEmail = $_POST['accountEmail'];
    $accountPassword = $_POST['accountPassword'];
    if (!empty($_POST['accountEmail'])) {
        if (!empty($_POST['accountPassword'])) {
            session_start();
            $_SESSION['accountEmail'] = $accountEmail;
            $_SESSION['accountPassword'] = $accountPassword;
        }
    }
    if (isset($_POST['accountPage'])) { {
            header("Location: http://localhost:8888/Simon/php_personal/day-5/exercises/account.php");
            exit();
        };
    }
}
?>


<body>
    <form action="" method="post">
        <input type="email" name="accountEmail" id="" placeholder="Enter your Email"><br>
        <input type="password" name="accountPassword" id="" placeholder="You Password"><br>
        <input type="submit" value="Submit" name="submitBtn"><br>
        <input type="submit" value="Go to your Account" name="accountPage"><br>

    </form>
    <?php echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>'; ?>
</body>

</html>