<?php
/*
hashing the password is a recommended action that will make the password not readablt on the database.

*/
?>
<form action="" method="post">
    <input type="text" name="submition"><br>
    <input type="button" value="show">
</form>
<?php if (isset($_POST['submition'])) {
    echo $_POST['submition'] . '<br>';

    // do not use MD5 nor sha1 as they are outdated and hackable
    //echo md5($_POST['submition']) . '<br>';
    //echo sha1($_POST['submition']) . '<br>';

    // password_hash function uses bcrypt() algorithm 
    echo password_hash($_POST['submition'], PASSWORD_DEFAULT); // there are other options, it will generate 60 CHARCTRS LONG
    // TP VERIFY AND CHECK WE need to use passwprd_verify() function which take two arguments as inputs, the first is the input the second is the database crypted password.
}
