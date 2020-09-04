<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/func/getMenu.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/func/getSection.php');


// mb_strlen и mb_strimwidth

function toCut ($title, $length = 12) {
    if (mb_strlen($title) > 15) {
        return mb_strimwidth($title, 0, $length, '...');
    } else {
        return $title;
    }
}