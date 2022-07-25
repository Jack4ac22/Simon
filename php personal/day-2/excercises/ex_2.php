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
    
    echo strtotime('now') . '<br>';
    echo strtotime('now') . '<br>';
    $calculation =  strtotime('now') - strtotime($_GET['datePicker']);
    echo $calculation . '<br>';

    ?>
    <form action="" method="get">
        <input type="date" name="datePicker" id=""><br>
        <button type="submit" name="BTN">Calculate</button>
    </form>
</body>

</html>
<!-- 
Create an HTML form with one input (date picker) and a 'submit' button.
When the 'submit' button is clicked, display the difference (in timestamp) between the date of today and the date in the input.
Do not worry about what's in the input once the button is clicked.
*/ -->