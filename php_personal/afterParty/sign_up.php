<?php
$pattern = "[\.]";
$text = "*aasd....!";
if (preg_match($pattern, $text)) {
    echo $text . "Match found!";
} else {
    echo $text .  "Match not found.";
}
