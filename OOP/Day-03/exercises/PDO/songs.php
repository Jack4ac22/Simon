<?php
$pdo = new PDO('mysql:host=localhost;dbname=spotify_db;', 'root', 'root');
$results = $pdo->query('SELECT * FROM songs');
$songs = $results->fetchAll(PDO::FETCH_ASSOC);
foreach ($songs as $song) {
	echo '<h3>' . $song['title'] . '</h3>'
		. '<p>' . $song['release_date'] . '</p>';
	$id = $song['id'];
	echo "<a href=\"song-details.php?id=$id\">See more...</a>";
};
$pdo = null;

/* 

-- Exercise : 

	Let's talk about songs.

	Create a page 'songs.php' where you should see all songs.
	Use PDO.

	Create a page 'song-details.php' that show detail page of a specific song.
	Use PDO & Prepared statement here.

*/
