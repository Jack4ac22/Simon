
<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
$query = 'SELECT * FROM songs';
// $results = mysqli_query($conn, $queri);
$results = mysqli_query($conn, $query); //repeated lines and can be used after the if statement.
// $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);
$songs = mysqli_fetch_all($results, MYSQLI_ASSOC); //repeated lines and can be used after the if statement.

// Order by
if (isset($_POST['orderby'])) {
    $query = 'SELECT * FROM songs ORDER BY title ' . $_POST['orderby'];
    $results = mysqli_query($conn, $query); //repeated lines and can be used after the if statement.
    $songs = mysqli_fetch_all($results, MYSQLI_ASSOC); //repeated lines and can be used after the if statement.
}

foreach ($songs as $song) {
    // echo $songs['title'] . '<br>';
    // echo $songs['release_date'] . '<br>';
    echo $song['title'] . '<br>';
    echo $song['release_date'] . '<br>';
    echo '<hr>';
}
