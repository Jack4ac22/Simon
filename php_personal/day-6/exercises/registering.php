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

    // Check if submit button is clicked
    if (isset($_POST['submitBtn'])) {

        $errors = false;

        if (empty($_POST['username'])) {
            $errors = true;
            echo 'Username is mandatory.<br>';
        }

        if (empty($_POST['email'])) {
            $errors = true;
            echo 'Email is mandatory.<br>';
        }

        if (empty($_POST['password'])) {
            $errors = true;
            echo 'Password is mandatory.';
        } else if ($_POST['password'] != $_POST['cPassword']) {
            $errors = true;
            echo 'Passwords must be the same<br>';
        }

        if ($errors == false) {
            // Save data from the Form
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

            // Check if user already exists
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);

            // If I have a result : mail already exists in the DB
            if (mysqli_num_rows($result) > 0) {
                echo 'Email already in use.<br>';
            } else {
                // Insert user in the DB
                $query = "INSERT INTO users(username, email, password)
VALUES('$username', '$email', '$password')";

                $result = mysqli_query($conn, $query);

                // When insert/update/delete, it returns true or false
                if ($result)
                    echo 'Successfully inserted in the DB.';
                else
                    echo 'Problem inserting.';
            }
        }
    }

    ?>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="text" name="cPassword" placeholder="Confirm password"><br>
        <input type="submit" name="submitBtn" value="Register">
    </form>

</body>

</html>