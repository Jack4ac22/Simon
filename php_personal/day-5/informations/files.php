<?php
/*
// read a file without a format and it will display the length of the total string (Not usefull)
$file_content = readfile('movies.txt');
echo $file_content . '<br>';

// read a file without a format and it will not display the length of the total string.ie, only displaying the contents(Not usefull)
$file_content = file_get_contents('movies.txt');
echo $file_content . '<br>';
*/
// the real thing: checking the existing of the file
if (file_exists('movies.txt')) {
    // opening the file...it does not read.. just opening.
    $file_handle = fopen("movies.txt", "r"); // it should be saved into variable to be usefull
    // fgets method can read one line of the text file. it startss at the begining of the file, then move one line each time we call the function.

    while (!feof($file_handle)) { // feof() this function check if wwe reached the end of the file
        echo fgets($file_handle) . '<br>';
    }
    fclose($file_handle); // the file open and saved on to variable
} else {
    echo 'file does not exist';
}
