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
    if (!isset($_COOKIE['email'])) {
        require_once 'nav.html';
    } else {
        require_once 'nav_logedIn.html';
    }
    ?>

    <h2>Register</h2>

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
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors = true;
            echo 'Email must be valid.<br>';
        }

        if (empty($_POST['password'])) {
            $errors = true;
            echo 'Password is mandatory.';
        } else if ($_POST['password'] != $_POST['cPassword']) {
            $errors = true;
            echo 'Passwords must be the same<br>';
        }

        if ($_FILES['user_picture']['error'] != UPLOAD_ERR_OK) { // no need to die() as the 
            $errors = true;
        }
        $extension = array_search($_FILES['user_picture']['type'], array(
            '.jpg' => 'image/jpeg',
            '.png' => 'image/png',
            '.gif' => 'image/gif'
        ));
        if ($extension === false) {
            $errors = true;
        }

        if ($errors == false) {

            // Save data from the Form
            $username = strip_tags(trim($_POST['username']));
            $email = strip_tags(trim($_POST['email']));
            // useing the user name to the picture
            $filePath = "pictures/$username$extension";
            // $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //uploading the file and verify the upload
            if (!move_uploaded_file($_FILES['user_picture']['tmp_name'], $filePath)) {
                echo 'something went wrong with your file, please try again...';
                die();
            }
            $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
            // Check if user already exists
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            // If I have a result : mail already exists in the DB
            if (mysqli_num_rows($result) > 0) {
                echo 'Email already in use.<br>';
            } else {
                // Insert user in the DB
                $query = "INSERT INTO users(username, email, password , picture)
                VALUES('$username', '$email', '$password', '$filePath')";
                echo $query;
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

    <form enctype="multipart/form-data" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="text" name="cPassword" placeholder="Confirm password"><br>
        <input type="file" name="user_picture"><br>
        <input type="submit" name="submitBtn" value="Register">
    </form>

</body>

</html>