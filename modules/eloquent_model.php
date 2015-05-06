<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//Se crea un nuevo objeto de tipo Capsule
$capsule = new Capsule;

$config = new config();

//Se indica en el siguiente array los datos de configuración de la BD
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $config->data['dbhost'],
    'database'  => $config->data['dbname'],
    'username'  => $config->data['dbuser'],
    'password'  => $config->data['dbpass'],
    'charset'   => 'utf8', //'charset' => $config->data['charset'],
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

//Se inicia Eloquent
$capsule->bootEloquent();