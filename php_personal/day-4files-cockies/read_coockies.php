<?php
echo '<pre>';
var_dump($_COOKIE);
echo '/<pre>';

// accessing a specific cookie

echo $_COOKIE['userName'];

// assiging a new value can be done every where, but the uneversal need to use the same creative sunthax: setcookie('userName', 'jack');