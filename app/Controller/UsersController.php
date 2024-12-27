<?php

App::uses('AppController', 'Controller');
class UsersController extends AppController
{ 
    public function index() {
        $this->layout = false;
        $this->render('login');
        
    }
    public function login(){
        $this->layout = false;
        if($this->request->is('post')){
            $this->loadModel('User');
            $senha=$this->request->data['senha'];
            $email=$this->request->data['email'];
            $achouRegis = $this->User->find('first', array(
                'fields' => array('id', 'senha'),
                'conditions' => array('User.email' => $email)
            ));
            if(!empty($achouRegis)){
                if(password_verify($senha, $achouRegis['User']['senha'])){
                    // $this->autoRender = false; 
                    // $this->response->type('json');
                    // $this->response->body(json_encode(array('status' => 'error', 'message' => 'Usuário não encontrado.')));
                }
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
            if($this->User->save($data)){
                $this->redirect(array('action' => 'index'));
            }
        }
    }
}
