<?php
class NovosPacientesController extends AppController
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
        if ($this->request->is('post')) {
            $this->loadModel('Paciente');
            
            $data['Paciente']['nome']=$this->request->data['nome'];
            $data['Paciente']['email']=$this->request->data['email'];
            $data['Paciente']['teelfone']=$this->request->data['telefone'];
            $data['Paciente']['data_nascimento']=$this->request->data['dataNascimento'];
            $data['Paciente']['endereco']=$this->request->data['endereco'];
            $data['Paciente']['responsavel']=$this->request->data['alunoResponsavel'];


            if($this->Paciente->save($data)){
                echo "foi";
            }else{
                echo "NÃO foi";
            }

        }else{
            $this->response->statusCode(400);
            echo json_encode([
                'error' => 'Requisição inválida. Método POST esperado.'
            ]);
        }
    }
}
