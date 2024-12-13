<?php 
    class UsuariosController extends AppController{
        public function beforeFilter(){
            if($this->request->is('ajax')){
                $this->layout=false;
            }
        }
        public function login(){

        }
        public function cadastro(){
            
        }
    }
?>