<?php
require 'database.php';
/**
 * connecting to database by using the function that we created in the database.php
 */
$conn = getDB();

/**
 * preparing the query
 */
$query = "whatSoEver";

/**
 *  excuting the query
 */

$results = mysqli_query($conn, $sql);

/**
 * checking for errors then fetching the results in an assosiative array 
 */

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $data = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
