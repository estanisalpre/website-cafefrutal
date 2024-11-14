<?php
require_once('vendor/autoload.php');

//Carpetas de vistas
// Flight::set('flight.views.path', __DIR__ . 'src/views');

//Ruta principal
Flight::route('/', function(){
    //Flight::render('/src/views/home.php');
    echo 'hello world';
});

Flight::start;