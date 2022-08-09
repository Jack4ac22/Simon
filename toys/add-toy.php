<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add a toy</title>
</head>

<body>
    <?php
    if (isset($_POST['add_toy'])) {
        $form_errors = false;
        // verifying the name 
        if (empty($_POST['name'])) {
            $form_errors = true;
            echo "<p class=\"red\">the name of the toy is mandatory!</p>";
        } elseif (strip_tags(trim($_POST['name'])) !== $_POST['name']) {
            $form_errors = true;
            echo "<p class=\"red\">the name of the toy is not VALID, it mightt damage your database!</p>";
        } else {
            $name = $_POST['name'];
            echo $name . '<br>'; // todo delelte
        }
        // verifying the price
        if (empty($_POST['price'])) {
            $form_errors = true;
            echo "<p class=\"red\">the price of the toy is mandatory!</p>";
        } elseif (is_numeric($_POST['price']) == false) {
            $form_errors = true;
            echo "<p class=\"red\">the price of the toy should hold a numeric value!</p>";
        } else {
            $price = $_POST['price'];
            echo $price . '<br>'; // todo delelte
        }
        // verifying the photo url
        if (empty($_POST['photo'])) {
            $form_errors = true;
            echo "<p class=\"red\">the photo of the toy is mandatory!</p>";
        } elseif (strip_tags(trim($_POST['photo'])) !== $_POST['photo']) {
            $form_errors = true;
            echo "<p class=\"red\">the photo of the toy is not VALID, it mightt damage your database!</p>";
        } else {
            $photo = $_POST['photo'];
            echo $photo . '<br>'; // todo delelte
        }
        // verifying the description
        if (empty($_POST['description'])) {
            $form_errors = true;
            echo "<p class=\"red\">the description of the toy is mandatory!</p>";
        } elseif (strip_tags(trim($_POST['description'])) !== $_POST['description']) {
            $form_errors = true;
            echo "<p class=\"red\">the description of the toy is not VALID, it mightt damage your database!</p>";
        } else {
            $description = $_POST['description'];
            echo $description . '<br>'; // todo delelte
        }
        // grab the value of the type
        $type = $_POST['type'];
        echo $type . '<br>'; // todo delelte
        if ($form_errors === false) {
            $connect_DB = mysqli_connect('localhost', 'root', 'root', 'christmas_shop');
            if ($connect_DB) {
                echo 'connected'; // todo delelte
                //check if the name already existed
                $name_check_query = "SELECT * FROM toys WHERE name='$name'";
                // send the query to the database to get the results
                $matching_name = mysqli_query($connect_DB, $name_check_query);
                var_dump($matching_name);
                // check the results if there is any match in the database
                if (mysqli_num_rows($matching_name) > 0) {
                    echo "<p class=\"red\">the name is already used, please chose another name!</p>";
                } else {
                    // preparying the insert query
                    $insert_query = "INSERT INTO toys (id, name, price, photo, type, description) VALUES (NULL, '$name', '$price', '$photo', '$type', '$description')";
                    echo $insert_query . '<br>'; // todo delelte
                    // send the INSERT Query to the database to insert the new item
                    $send_query = mysqli_query($connect_DB, $insert_query);
                }
            }
        }
    }
    ?>
    <form method="post">
        <input type="text" name="name" id="toy_name" placeholder="toy' name"><span class="red">

        </span><br>

        <input type="text" name="price" id="toy_price" placeholder="toy' price"><span class="red">
        </span><br>

        <input type="text" name="photo" id="toy_photo" placeholder="toy' photo url"><span class="name">

        </span><br>

        <input type="text" name="description" id="toy_photo" placeholder="Item' description"><span class="name">

        </span><br>

        <select name="type" id="">
            <option value="dolls">dolls</option>
            <option value="mechanic">mechanic</option>
            <option value="puzzel">puzzel</option>
        </select><br>

        <input type="submit" value="submit" name="add_toy">

    </form>
    <style>
        .red {
            color: red;
        }
    </style>
</body>

</html>