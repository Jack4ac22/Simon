<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // echo '<pre>';
    // var_dump($_GET); //uneverally gett and display all the data that is in the url... ie 
    // echo '</pre>';
    // the interaction that happens when the form is submeted.
    //if (!empty($_GET));
    $error = false;
    // to check if the btn is clicked
    if (isset($_GET['submitBtn'])) {
        if (empty($_GET['firstName'])) {
            echo 'first Name is mandatory';
            $error = true;
        };
        if (empty($_GET['lastName'])) {
            echo 'last Name is mandatory';
            $error = true;
        };
        if ($error = false) {

            echo '<br>' . 'Did you click';
            echo $_GET['lastName'];
        }
    };

    // there is two diferent method get and post, the get is going to save the data in universal variable $_GET
    // the action atribut: this will chose where we will send the data 

    ?>
    <!-- get method add all the information that were ientered into the url, that is helpfull  for SEO. because of the limitation of the url size/length we are limited with the number of charecters that we can send there. the other important factor is the security  -->
    <form method="GET">
        <input type="text" name="firstName" placeholder="first name"><br>
        <input type="text" name="lastName" placeholder="last name"><br>
        <input type="submit" value="send" name="submitBtn">
    </form>
    <!-- frontend validation does not work, from the inspector we can avoid it, therefor we need to do the validation on the backEnd -->
</body>

</html>