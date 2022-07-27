<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <input type="submit" value="reset" name="reset">
    </form>
    <?php

    if (isset($_COOKIE['numberOfVisit'])) {
        $s = $_COOKIE['numberOfVisit'] + 1;
    } else {
        $s = 1;
        $firstVisit = strtotime('now');
    }
    setcookie('numberOfVisit', $s);

    if (isset($_POST['reset'])) {
        setcookie('numberOfVisit', 1);
    }
    echo date('d/m/y h:i:s',  $firstVisit) . '<br>';

    echo 'visited: ' . $_COOKIE['numberOfVisit'];
    echo '<hr>';
    ?>
</body>

</html>
<!-- /*
Step 1: Create a page that indicates how often it has been visited by the user.
No need for forms, just the $_COOKIE array
Step 2: Also post the date of first visit by the client.
Step 3: Add a 'Reset' submit (in a form, of course)
When you click on the button, the counter is reset.
*/ -->