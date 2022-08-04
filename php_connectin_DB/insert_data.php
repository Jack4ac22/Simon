<?php
// 1- connection to dataBase
$conn = mysqli_connect('localhost', 'root', 'root', 'testLibrary'); //add the port in case of change
if ($conn) {
    echo 'connected';
    //2- preparing the query:
    $query = "INSERT INTO books(`title`, `publication_date`, `price`, `description`, `author_id`, `publisher_id`) VALUES('LTOR', '1954-05-01', 11, 'lorelila', 4, 1)";

    //3- ask DB to run the created query
    $results = mysqli_query($conn, $query);
    // when we use insert or update or delete we recieve boolean ir either true, or false
    if ($results) {
        echo '<br>' . 'inserted';
    } else {
        echo '<br>' . 'error';
    }
} else {
    echo ' connection Error';
}
