<?php
class Atendimento extends AppModel
{
    public $name = 'paciente';

    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        ),
        'cpf' => array(
            'rule' => 'notBlank'
        ),
        'rg' => array(
            'rule' => 'notBlank'
        ),
        'idade' => array(
            'rule' => 'notBlank'
        ),
        'telefone' => array(
            'rule' => 'notBlank'
        ),
        'email' => array(
            'rule' => 'notBlank'
        ),
        'endereco' => array(
            'rule' => 'notBlank'
        ),
        'sexo' => array(
            'rule' => 'notBlank'
        ),
        'data_nascimento' => array(
            'rule' => 'notBlank'
        ),
        'estado_civil' => array(
            'rule' => 'notBlank'
        ),
        'cor' => array(
            'rule' => 'notBlank'
        ),
        'profissao' => array(
            'rule' => 'notBlank'
        ),
        'cep' => array(
            'rule' => 'notBlank'
        ),
        'telefone_casa' => array(
            'rule' => 'notBlank'
        ),
        'cidade' => array(
            'rule' => 'notBlank'
        ),
        'telefone_trab' => array(
            'rule' => 'notBlank'
        ),
        'responsavel' => array(
            'rule' => 'notBlank'
        ),
        'telefone_responsavel' => array(
            'rule' => 'notBlank'
        ),
        'email_responsavel' => array(
            'rule' => 'notBlank'
        )
    );
}
?>