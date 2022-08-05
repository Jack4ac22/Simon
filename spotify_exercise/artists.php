    <?php

    // Working With Database

    // 1. Connect to the DB
    $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

    // True if connected, false if not
    if ($conn) {

        // 2. Prepare the query
        $query = 'SELECT * FROM artists';

        // 3. Ask DB to run/execute the query 
        $results = mysqli_query($conn, $query);

        // I retrieved my results but I need to fetch before using them
        // 4. Fetch the results as an associative array
        $artists = mysqli_fetch_all($results, MYSQLI_ASSOC);

        // echo '<pre>';
        // var_dump($songs);
        // echo '</pre>';
    } else {
        echo 'Problem connecting with the database';
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>artists</title>
    </head>

    <body>
        <?php
        if (!$_COOKIE['email']) {
            require_once 'nav.html';
        } else {
            require_once 'nav_logedIn.html';
        }
        ?>

        <?php foreach ($artists as $artist) : ?>

            <p>
                <strong>name: </strong>
                <?= $artist['name']; ?>
            </p>

            <p>
                <strong>Bio: </strong>
                <?= $artist['bio']; ?>
            </p>
            <p>
                <strong>Gender: </strong>
                <?= $artist['gender']; ?>
            </p>


            <a href="artist_detail.php?id=<?= $artist['id']; ?>">Detail page</a>

            <hr>

        <?php endforeach; ?>


    </body>

    </html>