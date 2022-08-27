<!-- 
    * PDO stands for PHP Data object.
    * PDO connect to many databases -more than 10 databases -  and it uses obejt oriented programing.

-->

<?php
// connect to DB 
$pdo = new PDO('mysql:host=localhost;dbname=spotify_db;', 'root', 'root');

// preparing the query and excute it
//$query = 'DELETE FROM songs WHERE id = 10';
//$results = $pdo->exec($query);

// fetching data
$results = $pdo->query('SELECT * FROM songs');
$songs = $results->fetchAll(PDO::FETCH_ASSOC);

print_r($songs);
