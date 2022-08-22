<?php
require_once 'HtmlString.php';
$markup = new HtmlString('My strinnnnng');
echo $markup->getBoldString();
echo '<hr>';
echo $markup->getItalicString();
echo '<hr>';
echo $markup->getItalicBoldString();
// var_dump($markup);
