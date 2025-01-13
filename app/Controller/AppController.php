<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
   
    public $components = array(
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'prontuarios',
                'action' => '/index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => '/index'
            ),
            'loginAction' => array(  
                'controller' => 'users',
                'action' => 'index/'
            )
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index','login', 'add');
    }
}
