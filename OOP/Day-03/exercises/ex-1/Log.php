<?php

class Log
{
    public static function  loged_in()
    {
        $logging_in_time_stamp = time();
        $logging_in_data = date("l d/m/y h:i:sa");
        $added_text = "signed in on the $logging_in_data. $logging_in_time_stamp. \r\n";
        $thefile = fopen('log_data.txt', 'a');
        fwrite($thefile, $added_text);
        fclose($thefile);
    }
}

/*

    Create a Log class.

    This class will be used to display a Log message like this one : '2021-04-26 14:00:03 - Accessing file';

    Create a static function in the class to match the instructions.

    Everytime this method is called, you will append the log in a file (dont overwrite it).
  
  	You should be able to call this method anytime, without instanciate the class.

    Create a client.php. Each time you're going to 'client.php', it should save log in the file.
  
*/