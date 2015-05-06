<?php

define('ELOQUENT', DNA.'modules/eloquent_model.php');
define('ORM', RESOURCES . 'orm/');

function orm($orm_src){
    require ORM . $orm_src;
}