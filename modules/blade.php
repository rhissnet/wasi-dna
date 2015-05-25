<?php

global $blade;
$blade = new Philo\Blade\Blade(RESOURCES . 'views', RESOURCES . '/cache');

function view($view = null, $data = array(), $mergeData = array(), $return = false){
    global $blade;
    $view = $blade->view()->make($view, $data, $mergeData)->render();
    if($return)
        return $view;
    else
        echo $view;
}

function get_view($view = null, $data = array(), $mergeData = array()){
    global $blade;
    $view = $blade->view()->make($view, $data, $mergeData)->render();
    return $view;
}