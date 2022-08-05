<?php

// 1. Get the ID from the URL
$id = $_GET['id'];

// 2. Connect to DB
$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

// 3. Run the query
$query = "SELECT * FROM artists WHERE id = $id";
$result = mysqli_query($conn, $query);

// 4. Fetch and display the title of the music and the poster 
$artist = mysqli_fetch_assoc($result);
// echo $song['title'];
// echo '<img src="' . $song['poster'] . '">';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>artist detail page</title>

</head>

<body>
    <?php require_once 'nav.html'; ?>
    <h1><?= $artist['name']; ?></h1>
    <p><?= $artist['bio']; ?></p>
</body>

</html>