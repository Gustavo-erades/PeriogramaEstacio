<?php 
    class UsuariosController extends AppController{
        public function beforeFilter(){
            if($this->request->is('ajax')){
                $this->layout=false;
            }
        }
       /* public function login(){

            $this->layout = 'ajax';
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirectUrl('/'));
                }else{
                    return $this->redirect($this->Auth->redirectUrl('/users/login?erro=error'));
                }
            }
        }*/
        // public function cadastro(){
            
        // }

       /* public function logout(){
            return $this->redirect($this->Auth->logout());
        }
        public function index(){
            return $this->redirect($this->Auth->redirectUrl('/'));
        }*/
    }
?>