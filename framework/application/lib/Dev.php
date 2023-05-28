<?php

ini_set('display_errors', 1);
error_reporting(E_ALL); //Это говорит о том, что мы будет выводить все Notice, Error, Warning

function debug($str) {
    echo "<pre>";
    var_dump($str);
    echo "</pre>";

    exit;
}