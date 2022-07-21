<?php
$avatar = 'https://cdn.pixabay.com/photo/2016/11/18/23/38/child-1837375_960_720.png';
$lastName = 'Tambansi';
$firstName = 'Bruto';
$attackPoint = 8;
$defensePoint = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagination</title>
</head>

<body>
    <div class="Container">
        <?php
        echo "<img src=$avatar>";
        echo '<br>';
        echo '<h2>' . $firstName . $lastName  . '</h2>';
        echo '<div class="box">';
        echo '<p>' . "attack point: " . $attackPoint . '</p>';
        echo '<p>' . "defense point: " . $defensePoint . '</p>';
        echo '</div>';
        if ($attackPoint >= 9) {
            echo '<p>' . "I am strong" . '/p>';
        } else {
            echo '<p>' . "I am just fine in attack" . '</p>';
        }
        if ($defensePoint >= 9) {
            echo '<p>' . "I am undefencable." . '/p>';
        } else {
            echo '<p>' . "I can stand." . '</p>';
        }
        ?>
        <?php
        echo "<img src='$avatar'><br><h2> $firstName $lastName </h2><div class=\"box\"><p> Attack/Defense: $attackPoint / $defensePoint</p></div>"
        ?>
    </div>
    <style>
        img {
            width: 250px;
        }

        .Container {
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-content: center;
            border: 2px solid black;
            border-radius: 25%;
            background-color: green;
        }

        .box {
            background-color: red;
            border: 1px dotted darkblue;
            border-radius: 25%;
            padding: 15px;

        }
    </style>
</body>

</html>
<!-- /*
-- Exercise 1
- Part 1 :
You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character, from a role-play game.
The character information will be saved in different variables.
There is five (5) informations :
-- An avatar image (url to img)
-- The last name
-- The first name
-- Attack points
-- Defense points
You have to display all the different informations about your character on the page.
*/

/*
- Part 2:
Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:
<div class="alert">
    <strong>Congratulations !</strong> Your character is ready to fight.</strong>
</div>
Add a conddition, if it is below 5, display message :
<div class="alert">
    <strong>Wait !</strong> Your charachter is too weeeakk!
</div>
*/ -->