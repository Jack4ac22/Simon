<?php
/* 
    - uploading a file is going to uploade it into the server
    - enctype is mandatory to be able to upload a file
    - the files are going to be in a temporary place on the server.
    - it can be determened where to put all the files later.

*/
if (isset($_POST['submitBTN'])) {
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';









    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
        die('Error during uploading'); // any error in the upload such as file size, connection error.
    }
    //then we can limite the type to certain types. 
    $files_extention = array_search($_FILES['myFile']['type'], array(
        '.jpg' => 'image/jpeg',
        '.png' => 'image/png',
        '.gif' => 'image/gif'
    ));
    if ($files_extention === false) {
        die('Uploaded file is not supported');
    } else {
        //the image is accepted then it can be uploaded 
        $file_name = time();
        $file_path = "uploads/$file_name$files_extention";
        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $file_path)) {
            echo 'file is uploaded';
        } else {
            echo 'there is an error';
        };
    };
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploading</title>
</head>

<body>
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="myFile"><br>
        <input type="submit" name="submitBTN" value="submit">
    </form>
</body>

</html>