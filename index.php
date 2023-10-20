<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('projects', 'ProjectController');
Routing::post('login', 'SecurityController');
Routing::post('addProject', 'ProjectController');
Routing::post('register', 'SecurityController');
Routing::post('search', 'ProjectController');
Routing::get('like', 'ProjectController');
Routing::get('register', 'DefaultController');


Routing::run($path);