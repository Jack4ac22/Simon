<?php

$pdo = new PDO('mysql:host=localhost;dbname=spotify_db;', 'root', 'root');

$query = "SELECT *
 from users
 Where email = ? ";
//alternative Where email = :email ";

$email = 'jack@gmail.com';

$prep = $pdo->prepare($query);
// sending the data to the pre-prepared query and replace the placeholder "?"
$prep->bindValue(1, $email);
// a;ternative $prep->bindValue(:email, $email);

//excuting the query
$prep->execute();
//Fetching all te data as an assosiatibve array
$users = $prep->fetchAll(PDO::FETCH_ASSOC);

print_r($users);

// to close the connection
$pdo = null;
