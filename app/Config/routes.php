<?php

Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/users/login', array('controller' => 'users', 'action' => 'login'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
