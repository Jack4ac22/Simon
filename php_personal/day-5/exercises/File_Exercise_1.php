<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.
	*/
if (file_exists('message.txt')) {
	$file_handle = fopen("message.txt", "r");
	while (!feof($file_handle)) {
		$current_line = fgets($file_handle);
		echo $current_line . '<hr>';
	}
	fclose($file_handle);
} else {
	echo 'file Does not Exist!!';
};
