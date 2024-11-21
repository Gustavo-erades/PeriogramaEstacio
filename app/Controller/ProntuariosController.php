<?php 
    class ProntuariosController extends AppController{
        public function beforeFilter() {
            parent::beforeFilter();
            if ($this->request->is('ajax')) {
                $this->layout = false;
            }
        }
        public function index(){
           
        }
        public function edit(){

        }
    }
?>