<?php

global $blade;
$blade = new Philo\Blade\Blade(RESOURCES . 'views', RESOURCES . '/cache');

function view($view = null, $data = array(), $mergeData = array()){
    global $blade;
    echo $blade->view()->make($view, $data, $mergeData)->render();
}