<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

$title = strip_tags(trim($_POST['titl']));
$release_date = strip_tags(trim($_POST['release_date']));
$poster = strip_tags(trim($_POST['poster']));
$artist_id = strip_tags(trim($_POST['artists']));
$category_id = strip_tags(trim($_POST['categories']));
if ($connect) {
    if (!empty($title)) {
        $query_insert = "
    INSERT INTO songs (id, title, release_date, poster, artist_id, categ_id) VALUES (NULL, '$title', '$release_date', '$poster', '$artist_id', '$category_id')";
        $results = mysqli_query($connect, $query_insert);
        if ($results) {
            echo "<h2>Congratulations, your song has been added.</h2><h3>$title</h3><p>release date: $release_date</p><img src=\"$poster\" alt=\"Song poster\" width=\"200px\">";
        } else {
            echo 'something went wrong';
        }
    }
}
