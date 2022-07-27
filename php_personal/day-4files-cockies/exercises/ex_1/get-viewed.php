<?php


if (isset($_COOKIE['viewed'])) {
    echo 'You already visited this page';
} else
    echo 'You have not visited the create-cookie page';
