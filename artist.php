<?php

define('DNA', "./vendor/josewilsoncc/dna/");

//Total de argumentos: $argc

switch ($argv[1]){
    case '-v':
        ?>

        **********************
        * Artist for Mutant! *
        **********************
        
        : Date :   2015/05/06
        
        + DNA      == 0.1.0
        + Eloquent >= 5.0.28
        + Blade    >= 3.0
        + I18n     >= 2.6.6
        
        **********************
        *      Colombia      *
        **********************
        <?php
        break;
    case 'mutate':
        require "./system/config/config.php";
        require DNA.'artist/sql.php';
        break;
}

echo $console;
?>

:*