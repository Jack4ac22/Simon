<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
if ($connect) {


    $query = 'SELECT * FROM songs';
    $results = mysqli_query($connect, $query);
    $data = mysqli_fetch_all($results, MYSQLI_ASSOC);
    foreach ($data as $song) {
        $title = $song['title'];
        $release_date = $song['release_date'];
        $src = $song['poster'];
        echo "<h3>$title</h3><p>$release_date</p><img src=\"$src\" width:\"250px\"><hr>";
    }
}
