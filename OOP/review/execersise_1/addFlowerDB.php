<?php
$name = null;
$price = null;

$errors = [];
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $errors['Name'] = 'Name is required.';
}

if (!empty($_POST['price'])) {
    if (is_numeric($_POST['price'])) {
        $price = $_POST['price'];
    } else {
        $errors['price'] = 'Price should be numeric.';
    }
} else {
    $errors['Price'] = 'Price is required.';
}

if (count($errors) > 0) {
    echo "We found errors in your form, please correct the folowing error/s: <br>";
    foreach ($errors as $title => $message) {
        echo "$title: $message. <br>";
    }
} else {
    echo "form is ok.";
    // connect to database
    $strConnection = 'mysql:host=localhost;dbname=flower_db';
    $pdo = new PDO($strConnection, 'root', 'root');
    // preparing the query
    $query = "INSERT INTO flowers (name, price) VALUES ('$name', '$price');";
    // excuting te query
    $nbRows = $pdo->exec($query);
}
