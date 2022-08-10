<?php $connect = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
if ($connect) {
    $artists_query = "SELECT id, name FROM artists";

    $artists_data = mysqli_fetch_all(mysqli_query($connect, $artists_query), MYSQLI_ASSOC);
    foreach ($artists_data as $artist) {
        $id = $artist['id'];
        $name = $artist['name'];
        echo "<option value=\"$id\">$name</option>";
    }
};
