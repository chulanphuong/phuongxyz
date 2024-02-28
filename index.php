<?php

require_once './vendor/autoload.php';
require_once './env.php';
require_once './helper.php';


use Bramus\Router\Router;
use Phuon\LamBaiThi\Controllers\GiangVienController;

// Create Router instance
$router = new Router();

// Define routes
$router->mount('/giang-vien', function() use ($router) {

    // CRUD - danh sach them sua xoa
    $router->get('/', GiangVienController ::class .'@index'); //danh sach 
    $router->get('/{id}/delete', GiangVienController ::class .'@delete');//xoa
    $router->match('GET|POST','/add' ,GiangVienController ::class .'@add');//them
    $router->match('GET|POST','{id}/update' ,GiangVienController ::class .'@update');
    });


// Run it!
$router->run();