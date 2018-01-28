<?php


// Redirect Function
function redirect($url) {
    header('location: '.$url);
    die();
    return false;
}


// VarDump Function
function dd($var) {
    echo '<pre>';
    die(var_dump($var));
    return false;
}