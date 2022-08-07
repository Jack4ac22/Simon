<?php
//impotring the NAV
if (!isset($_COOKIE['email'])) {
    require_once 'nav.html';
} else {
    require_once 'nav_logedIn.html';
}
// displaying the 
if (isset($_COOKIE['email'])) {
    $user_email = $_COOKIE['email'];

    $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
    $query = "SELECT username, email, picture, id FROM users WHERE email = '$user_email'";
    if ($conn) {
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        $username = $user['username'];
        $email = $user['email'];
        $picture = $user['picture'];
        $user_id = $user['id'];
        echo "welcom to your homepage, your username is $username <br> your email address is: $email <br>";
        echo "<h3>here is your picture</h3><p>We did not photoshop it... it is you</p><img src=\"$picture\" alt=\"profile picture\" width=\"250px\">";
    } else {
        echo 'Error with connection';
    }
} else {
    header('location:http://localhost:8888/Simon/spotify_exercise/login.php');
    exit;
}
?>
<form enctype="multipart/form-data" method="post">
    <input type="file" name="update_my_pic">
    <input type="submit" value="update" name="update">
    <?php
    // the form 
    if (isset($_POST['update'])) {
        if ($_FILES['update_my_pic']['error'] != UPLOAD_ERR_OK) {
            header('location:http://localhost:8888/Simon/spotify_exercise/account.php');
            exit;
            die('Error during upload');
        }
        $allwoed_extensions = array_search($_FILES['update_my_pic']['type'], array(
            '.jpg' => 'image/jpeg',
            '.png' => 'image/png',
            '.gif' => 'image/gif'
        ));
        if ($allwoed_extensions === false) {
            die('File must be an image !');
        } else {
            $time_tag = time();
            $filePath = "pictures/$username$time_tag$allwoed_extensions";
            if (move_uploaded_file($_FILES['update_my_pic']['tmp_name'], $filePath)) {
                $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
                if ($conn) {
                    $updating_query = "UPDATE users SET picture = \"$filePath\" WHERE users.id = $user_id;";
                    $updating_result = mysqli_query($conn, $updating_query);
                }
                if ($updating_result) {
                    echo 'File uploaded !';
                    header('location:http://localhost:8888/Simon/spotify_exercise/account.php');
                    exit;
                } else {
                    "something went wrong with the data";
                }
            } else {
                echo 'Problem uploading the file!';
            }
        }
    }
    ?>
</form>