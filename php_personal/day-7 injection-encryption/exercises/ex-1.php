<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp/signIn</title>
</head>

<body>

    <?php

    // sign in portion 
    if (isset($_POST['submitBtn_in'])) {
        $in_errors = false;
        if (empty($_POST['email_in'])) {
            $in_errors = true;
            echo 'Email is mandatory.<br>';
        } else if (!filter_var($_POST['email_in'], FILTER_VALIDATE_EMAIL)) {
            $in_errors = true;
            echo 'A valid Email is mandatory.<br>';
        };
        // checking checking the password
        if (!$in_errors) {
            $email_in = htmlspecialchars($_POST['email_in']);
            $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
            $query = "SELECT password FROM users WHERE email = '$email_in'";
            $results_in = mysqli_query($conn, $query);
            $in_password = mysqli_fetch_assoc($results_in);
            // print_r($in_password);
            $user_password = $in_password['password'];
            print_r(password_verify($email_in, $user_password));
            if (password_verify($_POST['password_in'], $user_password)) {
                echo 'congratulations' . '<br>';
                setcookie('email', $email_in);
            } else {
                echo 'wrong Password!';
            }
        }
    }


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
            echo 'A valid Email is mandatory.<br>';
        }


        if (empty($_POST['password'])) {
            $errors = true;
            echo 'Password is mandatory.';
        } else if (htmlspecialchars($_POST['password']) != htmlspecialchars($_POST['cPassword'])) {
            $errors = true;
            echo 'Passwords must be the same<br>';
        }

        if ($errors == false) {
            // Save data from the Form
            $username = htmlspecialchars(trim($_POST['username']));
            $email = htmlspecialchars($_POST['email']);
            $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

            $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

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
        <h2>sign up</h2>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="text" name="cPassword" placeholder="Confirm password"><br>
        <input type="submit" name="submitBtn" value="Register">
    </form>
    <hr>
    <form action="" method="post" name="signIn">
        <h2>sign in </h2>
        <input type="text" name="email_in" placeholder="Email"><br>
        <input type="text" name="password_in" placeholder="Password"><br>
        <input type="submit" name="submitBtn_in" value="sign in">
    </form>
    <hr>
    <?php

    ?>
</body>

</html>

<?php
function findSum($array, $sum)
{
    // Recreating a reordered associated array using a loop, C[n]
    $assocArray = array();
    for ($i = 0; $i < count($array); $i++) {
        // If the sum is smaller than its parts, jump to the next number as we are not interested
        if ($sum < $array[$i]) {
            continue;
        }
        $assocArray[$array[$i]] = $i;
    }
    /*
        Form of the array:
        [num1] => index1
        [num2] => index2
        [num3] => index3
    */
    // Now loop through the array to find a number and its missing number (missing number = sum - number) C[n]
    foreach ($assocArray as $value => $index) {
        if (isset($assocArray[$sum - $value])) {
            return ([$index, $assocArray[$sum - $value]]);
        }
    }

    return (false);
}

$searchedArray = [103, 4, 54, 13, 65, 89, 12, 19];
echo "Array: <pre>";
var_dump($searchedArray);
echo "</pre>";
var_dump(findSum($searchedArray, 93));
?>