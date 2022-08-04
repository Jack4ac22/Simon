<?php
// get method return an array. 
$id = $_GET['id'];
$query = "SELECT * FROM songs WHERE id = $id";

//echo $query;

// using GET method allowing us to creat links easly by using the id

$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db'); //add the port in case of change
$query = "SELECT * FROM songs WHERE id = $id";
$results_songs = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($results_songs, MYSQLI_ASSOC);
$artist_id = $songs[0]['artist_id'];
$query_artist = "SELECT * FROM artists WHERE id = $artist_id";
$results_artist = mysqli_query($conn, $query_artist);
$artist = mysqli_fetch_all($results_artist, MYSQLI_ASSOC);
$query_JOIN = "SELECT artists.name AS 'name', songs.title AS 'title', release_date AS 'date' FROM songs INNER JOIN artists ON songs.artist_id = artists.id WHERE songs.id = $id";
$results_combined = mysqli_query($conn, $query_JOIN);
$song_data = mysqli_fetch_all($results_combined);
print_r($song_data[0]);


if (count($songs) > 0) {
    echo  '<div>'
        . '<h2>'
        . $songs[0]['title']
        .  '</h2>' .
        '<p>' . '<b>' . 'Release Date: ' . '</b>' . $songs[0]['release_date'] . '</p>'
        . '<p>'
        . '<b>'
        . 'artist: '
        . '</b>'
        . $artist[0]['name']
        . '</p>'
        . '</div>';
}

if (count($song_data[0]) > 0) {
    echo  '<div>'
        . '<h2>'
        . $song_data[0][0]
        .  '</h2>' .
        '<p>' . '<b>' . 'Release Date: ' . '</b>' . $song_data[0][1] . '</p>'
        . '<p>'
        . '<b>'
        . 'artist: '
        . '</b>'
        . $song_data[0][2]
        . '</p>'
        . '</div>';
}
