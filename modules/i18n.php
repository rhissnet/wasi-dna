<?php

use Illuminate\Translation\Translator;
use Illuminate\Translation\FileLoader;
use Illuminate\Filesystem\Filesystem;
 
$locale = 'es';
$path = RESOURCES.'/lang';

global $translationLoader;
$translationLoader = new FileLoader(new Filesystem,$path);
global $localiser;
$localiser = new Translator($translationLoader,$locale);

function trans($data){
    global $localiser;
    echo $localiser->get($data);
}

function set_lang($lang){
    global $localiser;
    global $translationLoader;
    $localiser = new Translator($translationLoader,$lang);
}