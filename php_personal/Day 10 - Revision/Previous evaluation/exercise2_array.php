<?php

$celebrites = array(
    "Jeff Bezos" => array(
        "houses" => 15,
        "credit" => 8100140042,
        "debit" => 2123177
    ),
    "Dwayne Johnson" => array(
        "houses" => 21,
        "credit" => 871399200,
        "debit" => 9837123
    ),
    "Kylie Jenner" => array(
        "houses" => 5,
        "credit" => 55140042,
        "debit" => 55140040
    ),
    "PHP Simon" => array(
        "houses" => 0,
        "credit" => 200,
        "debit" => -1800
    )
);
//echo $celebrites["Jeff Bezos"]["houses"];
krsort($celebrites);
foreach ($celebrites as $celebrity => $celeb_data) {
    echo '<h3>' . $celebrity . '</h3>' . '<p>' . 'has ' . $celeb_data['houses'] . 'house';
    if ($celeb_data['houses'] > 1) {
        echo 's';
    }
    echo ", as well has a credit of " . $celeb_data['credit'] . ", with a banck account balance of: ";

    if ($celeb_data['debit'] < 0) {
        echo "<span style=\"color:red\">" . $celeb_data['debit'] . "</span>";
    } else {
        echo "<span>" . $celeb_data['debit'] . "</span>";
    }
    echo "<hr>";
}
// diplaying the celeb who has the largest bank account


//three
function find_me($array, $num)
{
    // checking the array and its content
    $array_errors = false;
    if (is_array($array)) {
        foreach ($array as $value) {
            if (!is_integer($value)) {
                $array_errors = true;
            }
        }
    } else $array_errors = true;
    if ((is_integer($num)) && (!$array_errors)) {
        $counting = 0;
        foreach ($array as $value) {
            if (abs($num) === abs($value)) {
                $counting = $counting + 1;
                echo 'the value ' . $value . ' the number ' . $num . ' is found ' . $counting . '<br>';
            }
            echo ' the  general counting ' . $counting . '<br>';
        }
    } else echo 'please confirm your input';
}
find_me([1, 2, 3, 4, 2, 2, 2, 1], 2);
