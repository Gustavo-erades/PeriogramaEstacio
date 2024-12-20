<?php

Router::connect('/', array('controller' => 'prontuarios', 'action' => 'index'));


Router::connect('/login', array('controller' => 'users', 'action' => 'login'));


Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
