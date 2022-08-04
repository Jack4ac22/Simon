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
    print_r($results);
    print_r($books);
    //here we can use foreach to go through the books
} else {
    echo 'problems';
}
