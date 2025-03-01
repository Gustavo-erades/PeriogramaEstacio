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
        $this->layout = 'ajax';
        $this->autoRender = false;

        if ($this->request->is('post')) {
            $this->loadModel('Paciente');
            $dadosForm = json_decode($this->request->input(), true);
            $dataNascimento = $dadosForm['dataNascimento']; 
            $hoje = date('Y-m-d');
            $data['Paciente']['nome']=ucfirst($dadosForm['nome']);
            $data['Paciente']['email']=$dadosForm['email'];
            $data['Paciente']['telefone']=$dadosForm['telefone'];
            $data['Paciente']['data_nascimento']=$dadosForm['dataNascimento'];
            $data['Paciente']['endereco']=ucfirst($dadosForm['endereco']);
            $data['Paciente']['endereco']=ucfirst($dadosForm['endereco']);
            $data['Paciente']['obs']=$dadosForm['obs'];
            $data['Paciente']['idade']=$hoje-$dataNascimento;
            if($this->Paciente->save($data)){
                echo json_encode([
                    'success' => true
                ]);
            }else{
                echo json_encode([
                    'success' => false
                ]);
            }
        }else{
            $this->response->statusCode(400);
            echo json_encode([
                'error' => 'Requisição inválida. Método POST esperado.'
            ]);
        }
    }
}
