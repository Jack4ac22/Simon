<?php
// w = write mode; if it does not exist, the function will try to creat a function. 
$file_handles = fopen("myfile.txt", "w");
$file_content = "something and other thing that doesnot matter.";

// write to the file:
fwrite($file_handles, $file_content); // it will over write all the data.

//close the file
fclose($file_handles);

echo 'file created';

// to add to the file we append the content by using "a" insteadof "w";

//copy a file  copy();
// delete  a file delete();
