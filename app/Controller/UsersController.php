<?php

use function PHPSTORM_META\type;

App::uses('AppController', 'Controller');
class UsersController extends AppController
{ 
    public function index() {
        $this->layout = false;
        $this->render('login');
        
    }
    public function login(){
        $this->layout = false;
        $this->autoRender = false; 
        header('Content-Type: application/json'); 

        if($this->request->is('post')){
            $this->loadModel('User');
            $senha=$this->request->data['senha'];
            $email=$this->request->data['email'];
            $achouRegis = $this->User->find('first', array(
                'fields' => array('id','senha'),
                'conditions' => array('User.email' => $email)
            ));
           if(!empty($achouRegis) && password_verify($senha, $achouRegis['User']['senha'])){
                $this->Session->write('Auth.User', $achouRegis['User']['id']);
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Login ou senha incorretos']);
            }
        }
    }
    public function add(){
        $this->layout=false;
        $this->render('add');
        if($this->request->is('post')){
            $this->loadModel('User');
            $data = array(
                'User' => array(
                    'nome' =>$this->request->data['nome'],
                    'senha' =>password_hash($this->request->data['senha'], PASSWORD_BCRYPT),
                    'email' =>$this->request->data['email'],
                    'matricula' =>$this->request->data['matricula']
                )
            );
           $this->User->save($data);
        }
    }
}
