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

function trans($key, array $replace = array(), $locale = null){
    global $localiser;
    echo $localiser->get($key, $replace, $locale);
}

function get_trans($key, array $replace = array(), $locale = null){
    global $localiser;
    return $localiser->get($key, $replace, $locale);
}

function set_lang($lang){
    global $localiser;
    global $translationLoader;
    $localiser = new Translator($translationLoader,$lang);
}