<?php
// removing the white spaces frmo the before and or after of the string by trim();
$email = ' somthing@somdomain.com ';
$emailcorrection = trim($email);

//checking the the emial
$validEmail = filter_var($emailcorrection, FILTER_VALIDATE_EMAIL);
var_dump($validEmail);
