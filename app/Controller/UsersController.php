<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController
{

    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function login()
    {
        $this->layout = 'ajax';
        if ($this->request->is('post')) {
            return $this->redirect($this->Auth->redirectUrl('/'));
            // if ($this->Auth->login()) {
            //     return $this->redirect($this->Auth->redirectUrl('/'));
            // } else {
            //     return $this->redirect($this->Auth->redirectUrl('/users/login?erro=error'));
            // }
            // $passwordHasher = new BlowfishPasswordHasher();
            //     $this->data[$this->alias]['senha'] = $passwordHasher->hash(
            //         $this->data[$this->alias]['senha']
            //     );
        }
    }

    public function add()
    {
        $this->layout = 'ajax';
		$this->loadModel('User');

        if ($this->request->is('post')) {
            echo "oi";
           /* $this->Auth->user('id');
            $this->User->create();
            $this->request->data = json_decode(file_get_contents('php://input'), true);
            if ($this->User->save($this->request->data)) {
                print_r("usuário cadastrado!");
            } else {
                print_r("O usuário não pôde ser salvo!");
            }*/
        }
    }


    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        return $this->redirect($this->Auth->redirectUrl('/'));
    }
}
