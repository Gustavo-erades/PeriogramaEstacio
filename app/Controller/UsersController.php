<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController
{/*
    public $helpers = array('Html', 'Form');
    public $components = array(
        'RequestHandler',
        'Session',  // Para gerenciar a sessão do usuário
    );

    // Se você precisar permitir acesso sem login para o login e cadastro, defina aqui
    public function beforeFilter()
    {
        parent::beforeFilter();
        // Permitindo acesso aos métodos login e add sem autenticação
        $this->Auth->allow('login', 'add');
    }

    // Função de login
    public function login()
    {
        $this->layout = 'login';

        if ($this->request->is('post')) {
            // Obter os dados de email e senha do formulário
            $email = $this->request->data['User']['email'];
            $senha = $this->request->data['User']['senha'];

            // Verificar se o usuário existe na tabela 'users' com os dados fornecidos
            $user = $this->User->find('first', array(
                'conditions' => array(
                    'User.email' => $email,
                    'User.senha' => $senha  // Não utilizar hash para a senha
                )
            ));

            if ($user) {
                // Se o usuário for encontrado, cria a sessão e redireciona para a página principal
                $this->Session->write('User', $user);
                return $this->redirect('/prontuarios');  // Redireciona para a página do usuário (exemplo)
            } else {
                // Exibe mensagem de erro se as credenciais estiverem incorretas
                $this->Flash->set('Usuário ou senha incorretos', array('key' => 'warning'));
            }
        }
    }

    // Função de logout
    public function logout()
    {
        $this->Session->delete('User');  // Remove a sessão do usuário
        return $this->redirect('/login');  // Redireciona para a página de login
    }

    // Função de adição de novo usuário (caso tenha um formulário para isso)
    public function add()
    {
        $this->layout = 'login';
    }

    // Função index (caso seja necessário)
    public function index()
    {
        // Lógica para a página principal do usuário
    }*/
}
