<?php

/**
 * Database
 *
 * A connection to the database
 */

class Database
{

    /**
     * Get the database connection
     *
     * @return PDO object Connection to the database server
     */


    public function getConn()
    {
        $db_host = "localhost";
        $db_name = "????";
        $db_user = "root";
        $db_pass = "root";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        // try and catch around the code that might cause an error, it will intiate an error object that has methods, we can echo the getMessage method to read the message.
        try {
            // we return the connection in a variable and then set an attribute so we can catch errors when we excute the query in the next step;
            $db = new PDO($dsn, $db_user, $db_pass);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
