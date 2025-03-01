<?php
class NovosController extends AppController
{
    public function beforeFilter()
    {
        if ($this->request->is('ajax')) {
            $this->layout = false;
        }
    }
    public function index() {}

    public function add()
    {
        $this->layout = false;
        $this->autoRender = false;
        // echo "<pre>";
        // print_r($this->request->data);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // exit;
        echo json_encode([
            'redirectUrl' =>$this->Auth->redirectUrl('http://localhost/PeriogramaEstacio/novos/periograma')
        ]);
    }

    public function periograma(){
        $this->layout = false;
        $this->render('periograma');
    }
}
