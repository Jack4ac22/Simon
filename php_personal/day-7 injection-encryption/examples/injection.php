<?php
/*basic security things.
the data of the user need to be manipulated specially from the form or other input. sometimes it is a white space before and or after the data.
* cleaning the data by removing the white spaces
* validate the data (be sure that it is fitting to the pre-fixed rules)
* escape data befir sending it to the data base
* escape data before sending it from DB to the user.

*/
if (isset($_POST['submit'])) {
    if (!empty($_POST['input'])) {
        echo $_POST['input'] . '<br>';
    }
    echo htmlspecialchars($_POST['input']) . '<br>'; // keeping the html element to upload the data to the data base as if in the post. it does convert the sympols to entities as & which is converted to &it then if I want to use it as html tag I need to transformed one more time by using function  html_entity_decode().

    echo strip_tags($_POST['input']); // this will remove the tags



}


?>
<form action="" method="post">
    <input type="text" name="input" placeholder="some data">
    <button type="submit" name="submit">submit</button>
</form>