<?php
ini_set('display_errors', 1); //вывод ошибок
error_reporting(E_ALL);


function debug($str) {      //функция Debug
    echo '<pre>';
    var_dump($str);         
    echo'</pre>';
    exit;
}


