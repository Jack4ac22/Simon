<?php
// in case of error we need to creat a function that will be runned by using -set_error_handler('costom_error');-


function custom_error($error_no, $error_msg)
{
    echo 'Something is wrong<br>';
    echo 'Error code : ' . $error_no . '<br>';
    echo 'Error message : ' . $error_msg . '<br>';
}

set_error_handler('custom_error');

echo 15 / 0;
