<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
    public $useTable = 'users';
/*
    // Validações para login e senha
    public $validate = array(
        'email' => array(
            'rule' => 'email', // Verifica se o email tem um formato válido
            'message' => 'Informe um email válido'
        ),
        'senha' => array(
            'rule' => 'notBlank', // Verifica se a senha não está vazia
            'message' => 'O campo senha é obrigatório'
        )
    );*/

    // Não é necessário o beforeSave, pois não estamos usando hash para a senha
}
?>
