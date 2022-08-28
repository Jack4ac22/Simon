<?php
require 'Database.php';

/**
 * creating a database object through which we will get the connection
 */

$db = new Database();

$conn = $db->getConn();

/**
 * preparing the query
 */

$query = "whatSoEver";

/**
 *  excuting the query
 */

$results = $conn->query($query);

/**
 * checking for errors then fetching the results in an assosiative array by using catch exception
 */

$data = $results->fetchAll(PDO::FETCH_ASSOC);
