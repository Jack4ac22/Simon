<?php 


$connect = mysqli_connect('localhost', 'root', 'root', 'spotify_db');
if ($connect) {
$typed_text = $_POST['search'];

    $query = "SELECT * FROM songs WHERE songs.title LIKE '%$typed_text%'";
    $results = mysqli_query($connect, $query);
    $data = mysqli_fetch_all($results, MYSQLI_ASSOC);
    foreach ($data as $song) {
        $title = $song['title'];
        $release_date = $song['release_date'];
        $src = $song['poster'];
        echo "<h3>$title</h3><p>$release_date</p><img src=\"$src\" width:\"150px\"><hr>";
    }
}
/*
	-- Exercise : 

	In this exercise, you will use the 'spotify' database.

	Create a new file called 'search.html'.
		In this file, create a form with only one input (search textbox).
		This input will be use to search for a song.
		
		Each time the user press a key, results are shown/updated on the page.

    To achieve this you should create a php file ('search-songs.php'). 
		This PHP file looks for a song matching specific characters and display the songs matching.
*/
?>
