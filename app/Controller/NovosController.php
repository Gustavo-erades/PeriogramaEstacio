<?php 
    class NovosController extends AppController{
        public function beforeFilter(){
            if($this->request->is(  'ajax')){
                $this->layout=false;
            }
        }
        public function index(){

        }

        // public $components=array('RequestHandler');
    }

?>