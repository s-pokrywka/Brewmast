<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('index', 'DefaultController');
Router::get('recipts', 'N_reciptController');
Router::get('new_recipt', 'DefaultController');
Router::post('login', 'SecurityController');
Router::get('registration', 'SecurityController');
Router::post('N_recipt', 'N_reciptController');
Router::post('add_recipts', 'N_reciptController');


Router::run($path);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('index', 'DefaultController');
Router::get('recipts', 'N_reciptController');
Router::get('new_recipt', 'DefaultController');
Router::post('login', 'SecurityController');
Router::get('registration', 'SecurityController');
Router::post('N_recipt', 'N_reciptController');
Router::post('add_recipts', 'N_reciptController');


Router::run($path);