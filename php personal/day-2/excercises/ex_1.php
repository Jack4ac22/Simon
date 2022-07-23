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
    ini_set('display_errors', 1);
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    echo strpos($_GET['userMail'], '@');
    $error = false;
    if (isset($_GET['submitBTN'])) {
        if (strpos($_GET['userMail'], '@') != false) {
            echo '<br>' . '<p class="green">' . 'Valid Email' . '</p>';
        } else {
            echo '<p class="red">' . 'Invalid Email' . '</p>';
        }
    }
    ?>

    <form method="GET">
        <input type="email" name="userMail" placeholder="Enter Email Address"><br>
        <input type="password" name="userPass" placeholder="Password"><br>
        <button type="submit" value="send" name="submitBTN">Sign in</button>

    </form>
</body>

</html>

<!-- /*
-- Exercise 1 :

1.1 :
Create a new page with a basic connection form with email and password input.
1.2 :
Get the click of the button.
1.3 :
Check if the mail contains the '@' symbol.
If yes, display 'valid email';
If no, display 'invalid email';
To do this you have to check for "str_pos" function !
1.4 :
When the user validates the form: display a message in red if invalid, show in green if valid.
-- Exercise 2 :

Create an HTML form with one input (date picker) and a 'submit' button.
When the 'submit' button is clicked, display the difference (in timestamp) between the date of today and the date in the input.
Do not worry about what's in the input once the button is clicked.
*/ -->