<?php
if (!isset($_GET['id'])) {
    header("Location: songs.php");
    exit();
} else {
    $pdo = new PDO('mysql:host=localhost;dbname=spotify_db;', 'root', 'root');

    $query = "SELECT *
 from songs
 Where id = ? ";
    $id = $_GET['id'];
    $prep = $pdo->prepare($query);
    $prep->bindValue(1, $id);
    $prep->execute();
    $song = $prep->fetchAll(PDO::FETCH_ASSOC);

    echo '<h2>' . 'Title: ' . $song[0]['title'] . '</h2>';
    echo '<p>' . 'Release date' . $song[0]['release_date'] . '</p>';
    $src = $song[0]['poster'];
    $alt = 'cove image of ' . $song[0]['title'];
    echo "<div><img src=\"$src\" alt=\" $alt\" width=\"150px\"></div>";
    echo "<a href=\"songs.php\">to songs</a>";


    $pdo = null;
}
