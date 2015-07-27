<?php

define('DNA', BASEPATH."vendor/rhissnet/wasi-dna/");
define('RESOURCES', BASEPATH . 'resources/');
define('DNA_SKIN', BASEPATH . 'system/vista/skin/');

require DNA.'modules/eloquent.php';
require DNA.'modules/blade.php';
require DNA.'modules/i18n.php';