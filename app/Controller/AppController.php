<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
    /*public $components = array(
        'Session', // Para usar sessões na aplicação
        'Auth' => array( // Componente de autenticação
            'loginRedirect' => '/',  // Redireciona para a home após login
            'logoutRedirect' => '/users/login', // Redireciona para a página de login após logout
            'authError' => 'Você precisa estar logado para acessar essa página.', // Mensagem de erro de autorização
            'authorize' => array(), // Remover a autorização (não será mais necessária com o login manual)
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        
        // Permite acesso aos métodos 'login' e 'add' sem estar autenticado
        $this->Auth->allow('login', 'add');
    }*/
}
