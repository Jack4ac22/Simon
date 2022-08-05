<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
    <?php if (!$_COOKIE['email']) {
        require_once 'nav.html';
    } else {
        require_once 'nav_logedIn.html';
    } ?>
    <h2>Login</h2>
    <?php
    if (isset($_POST['loginBtn'])) {

        $errors = false;

        if (empty($_POST['email'])) {
            $errors = true;
            echo 'Email is mandatory.<br>';
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors = true;
            echo 'Email must be valid.<br>';
        }

        if (empty($_POST['password'])) {
            $errors = true;
            echo 'Password is mandatory.';
        }

        if ($errors == false) {
            $email = $_POST['email'];

            // Check if user already exists
            $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);

            if (password_verify($_POST['password'], $user['password'])) {
                echo 'Log-in successfully.';
                setcookie('email', $email);
                header('location:http://localhost:8888/Simon/spotify_exercise/loged_in.php');
                exit;
            } else {
                echo 'Password is incorrect.';
            }
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="email" placeholder="Your email"><br>
        <input type="text" name="password" placeholder="Your password"><br>
        <input type="submit" name="loginBtn" value="Log-in">
    </form>
</body>

</html>