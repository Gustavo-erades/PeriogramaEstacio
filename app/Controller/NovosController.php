<?php 
    class NovosController extends AppController{
        public function beforeFilter(){
            if($this->request->is('ajax')){
                $this->layout=false;
            }
        }
        public function index(){

        }

        public function add(){
            $this->layout=false;
            $this->autoRender = false; 
                echo "<pre>";
                print_r($this->request->data);
                echo "</pre>";
                exit;
            
        }
    }

?>