<!-- php can be opened anywhere in html or on top or even under
can open multiple php  -->
<?php
$firstName = 'Jack'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HTML/PHP page</h1>
    <?php
    echo 'first name is ' . $firstName ?>
</body>

</html>