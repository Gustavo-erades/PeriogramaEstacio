<?php 
    class NovosPacientesController extends AppController{
        public function beforeFilter(){
            if($this->request->is('ajax')){
                $this->layout=false;
            }
        }
        public function index(){
            
        }
    }
?>