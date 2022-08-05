<?php
echo $_COOKIE['email']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogedIn</title>
</head>

<body>
    <?php
    if (!$_COOKIE['email']) {
        require_once 'nav.html';
    } else {
        require_once 'nav_logedIn.html';
    }
    ?>
</body>

</html>