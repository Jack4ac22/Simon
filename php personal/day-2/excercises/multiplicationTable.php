<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>


<body>
    <form action="" method="get">
        <label for="myNumber">PLease enter a number </label><input type="text" name="myNumber" id="myNumber"><span> * </span>
        <label for="multipluLevle">multiply </label><input type="text" name="multipluLevle"><label for="multipluLevle"> times</label>
        <button type="submit" name="submitBTN" value="Multiply"> Do it </button>
        <?php if (isset($_GET['submitBTN'])) {
            echo '<table>';
            if (is_numeric($_GET['myNumber'])) {
                for ($number = 1; $number <= $_GET['multipluLevle']; $number++) {
                    echo
                    '<tr>' . '<td>' . $number . '*' . $_GET['myNumber'] . ' =' . '</td>' . '<td>' . $number * $_GET['myNumber'] .  '</td>'
                        . '</tr>';
                }
            } else {
                echo 'please Enter a numeric value!';
            }
            echo '</table>';
        } ?>

        <style>
            td {
                border: 3px double black;
                border-radius: 3%;
                margin: 5px;
            }

            tr:nth-child(odd) {
                background-color: rgba(10, 10, 10, 0.1);
            }
        </style>
    </form>
</body>

</html>