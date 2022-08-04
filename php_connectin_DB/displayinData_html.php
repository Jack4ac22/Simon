<?php
//working with DB
// 1- connection to dataBase
$conn = mysqli_connect('localhost', 'root', 'root', 'testLibrary'); //add the port in case of change
if ($conn) {
    echo 'connected';
    //2- preparing the query:
    $query = 'SELECT * FROM books';

    //3- ask DB to run the created query
    $results = mysqli_query($conn, $query);

    //4- the results are returned but it is not fetched so I need to FETCCH
    $books = mysqli_fetch_all($results, MYSQLI_ASSOC);
    //print_r($results);
    //print_r($books);
    //here we can use foreach to go through the books
} else {
    echo 'problems';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($books as $book) : ?>
        <p>
            <strong>title: </strong>
            <?php $book['title'] . '<br>' ?>
        </p>
        <p>
            <strong>Publication Date: </strong>
            <?php $book['publication_date'] . '<hr>' ?>
        </p>
    <?php endforeach; ?>

</body>

</html>