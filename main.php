<?php


use App\StringRevert;

require_once "./vendor/autoload.php";



function clientCode()
{

    $string=  new StringRevert();

    $result = $string->revertCharacters("Привет! Давно не виделись.");

    echo $result; // Тевирп! Онвад ен ьсиледив.


}

clientCode();



