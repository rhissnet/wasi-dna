<?php

#2015/07/27 10:51 a.m.

global $blade;
$blade = new Philo\Blade\Blade(RESOURCES . 'views', RESOURCES . '/cache');

global $blade_skin;
$blade_skin = new Philo\Blade\Blade(DNA_SKIN, RESOURCES . '/cache');

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

function skin($view = null, $data = array(), $mergeData = array(), $return = false){
    global $blade_skin;
    $view = $blade_skin->view()->make($view, $data, $mergeData)->render();
    if($return)
        return $view;
    else
        echo $view;
}

function get_skin($view = null, $data = array(), $mergeData = array()){
    global $blade_skin;
    $view = $blade_skin->view()->make($view, $data, $mergeData)->render();
    return $view;
}