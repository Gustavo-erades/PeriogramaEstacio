<?php 
    class ProntuariosController extends AppController{
        public function beforeFilter() {
            parent::beforeFilter();
            if ($this->request->is('ajax')) {
                $this->layout = false;
            }
        }
        public function index(){
           $this->loadModel('Paciente');
           $sql="SELECT Paciente.id, Paciente.nome, Paciente.idade, Paciente.telefone, Paciente.email, Paciente.obs FROM pacientes as Paciente";
           $pacientesRegistrados=$this->Paciente->query($sql);
           $this->set('pacientesRegistrados',$pacientesRegistrados);
        }
        public function edit(){

        }
    }
?>