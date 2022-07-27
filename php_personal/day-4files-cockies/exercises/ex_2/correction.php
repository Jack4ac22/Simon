<form action="" method="post">
    <input type="submit" value="reset" name="reset">
</form>
<?php
// check the reset
if (isset($_POST['reset'])) {
    // we will remove the the cookie file with this but its value is already loaded into the array so we need to unset its value
    setcookie('count', 0, time() - 3600);
    // unsetting the value
    unset($_COOKIE['count']);
}
// check if my cookie exist
if (isset($_COOKIE['count'])) {
    setcookie('count', $_COOKIE['count'] + 1);
    echo 'visited:' . $_COOKIE['count'];
    echo '<br>' . 'Date of your first visit: ' . date('d/m/y - h:m', $_COOKIE['firstVisit']);
} else {
    echo ' First Time visiting the page !';
    setcookie('count', 1);
    setcookie('firstVisit', time());
}
