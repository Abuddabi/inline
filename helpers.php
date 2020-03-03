<?php

//ВКЛЮЧЕНИЕ ОТЧЕТА ОБ ОШИБКАХ
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


function pre_r($i)
{
    echo "<pre>";
    print_r($i);
    die;
}